<?php
namespace Cyberduck\LaravelExcel\Exporter;

use Box\Spout\Common\Type;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;

class Csv extends AbstractSpreadsheet
{
    public function getType()
    {
        return Type::CSV;
    }

    public function createWriter()
    {
        return WriterEntityFactory::createCSVWriter();
    }
}
