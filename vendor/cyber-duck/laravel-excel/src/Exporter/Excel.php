<?php
namespace Cyberduck\LaravelExcel\Exporter;

use Box\Spout\Common\Type;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;

class Excel extends AbstractSpreadsheet
{
    public function getType()
    {
        return Type::XLSX;
    }

    public function createWriter()
    {
        return WriterEntityFactory::createXLSXWriter();
    }
}
