<?php
namespace Cyberduck\LaravelExcel\Exporter;

use Illuminate\Support\Collection;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Illuminate\Database\Query\Builder;
use Cyberduck\LaravelExcel\Serialiser\BasicSerialiser;
use Cyberduck\LaravelExcel\Contract\SerialiserInterface;
use Cyberduck\LaravelExcel\Contract\ExporterInterface;

abstract class AbstractSpreadsheet implements ExporterInterface
{
    protected $data;
    protected $type;
    protected $serialiser;
    protected $chuncksize;
    protected $callbacks;

    public function __construct()
    {
        $this->data = [];
        $this->type = $this->getType();
        $this->serialiser = new BasicSerialiser();
        $this->callbacks = collect([]);
    }

    public function __call($name, $args)
    {
        $this->callbacks->push([$name, $args]);
        return $this;
    }

    public function load(Collection $data)
    {
        $this->data = $data;
        return $this;
    }

    public function loadQuery(Builder $query)
    {
        $this->data = $query;
        return $this;
    }

    public function setChunk($size)
    {
        $this->chunksize = $size;
        return $this;
    }

    public function setSerialiser(SerialiserInterface $serialiser)
    {
        $this->serialiser = $serialiser;
        return $this;
    }

    abstract public function getType();

    abstract public function createWriter();

    public function save($filename)
    {
        $writer = $this->create();
        $writer->openToFile($filename);
        $writer = $this->makeRows($writer);
        $writer->close();
    }

    public function stream($filename)
    {
        $writer = $this->create();
        $writer->openToBrowser($filename);
        $writer = $this->makeRows($writer);
        $writer->close();
    }

    protected function create()
    {
        $writer = $this->createWriter();
        $this->callbacks->each(function ($elem) use (&$writer) {
            call_user_func_array(array($writer, $elem[0]), $elem[1]);
        });
        return $writer;
    }

    protected function makeRows($writer)
    {
        $headerRow = $this->serialiser->getHeaderRow();
        if (!empty($headerRow)) {
            $row = WriterEntityFactory::createRowFromArray($headerRow);
            $writer->addRow($row);
        }
        if ($this->data instanceof Builder) {
            if (isset($this->chuncksize)) {
                $this->data->chunk($this->chuncksize);
            } else {
                $this->addRowsDataToWriter($this->data->get(), $writer);
            }
        } else {
            $this->addRowsDataToWriter($this->data, $writer);
        }
        return $writer;
    }

    public function addRowsDataToWriter($data, $writer)
    {
        foreach ($data as $record) {
            $recordData = $this->serialiser->getData($record);
            $row = WriterEntityFactory::createRowFromArray($recordData);
            $writer->addRow($row);
        }
    }
}
