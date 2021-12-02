<?php
namespace Cyberduck\LaravelExcel\Importer;

use Box\Spout\Common\Type;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Excel extends AbstractSpreadsheet
{
    public function getType()
    {
        return Type::XLSX;
    }

    public function createReader()
    {
        return ReaderEntityFactory::createXLSXReader();
    }
}
