<?php
namespace Cyberduck\LaravelExcel\Importer;

use Box\Spout\Common\Type;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Csv extends AbstractSpreadsheet
{
    public function getType()
    {
        return Type::CSV;
    }

    public function createReader()
    {
        return ReaderEntityFactory::createCSVReader();
    }
}
