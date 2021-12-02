<?php
namespace Cyberduck\LaravelExcel\Importer;

use Box\Spout\Common\Type;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class OpenOffice extends AbstractSpreadsheet
{
    public function getType()
    {
        return Type::ODS;
    }

    public function createReader()
    {
        return ReaderEntityFactory::createODSReader();
    }
}
