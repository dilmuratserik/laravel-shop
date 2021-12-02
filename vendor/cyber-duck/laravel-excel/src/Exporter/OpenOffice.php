<?php
namespace Cyberduck\LaravelExcel\Exporter;

use Box\Spout\Common\Type;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;

class OpenOffice extends AbstractSpreadsheet
{
    public function getType()
    {
        return Type::ODS;
    }

    public function createWriter()
    {
        return WriterEntityFactory::createODSWriter();
    }
}
