<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function query()
    {
        return Product::query()->where('id', $this->id);
    }

    public function headings(): array
    {
        return ["title", "slug","summary","description","cat_id","child_cat_id",'price','brand_id','discount','status','photo','size','stock',"is_featured","condition"];
    }
}

