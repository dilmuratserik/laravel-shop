<?php

namespace App\Imports;
use App\Models\Product;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ProductImport implements ToModel,WithHeadingRow,WithChunkReading
{
    private $products;
    use Importable;
    public function __construct(){
        $this->products = Product::all(['id','title'])->pluck('id','name');
    }
    /**
    * @param array $row
    *
    * @return Product
     */

   /* public function _construct(){
        $this->brands=Brand::select('id','title','status');
        $this->categories=Category::select('id','title','is_parent','status');
    }
   */
    public function model(array $row)
{/*$category=Category::where('title',$row['title'])->where('status',$row['status']);
        $brand=Brand::where('title',$row['title'])->where('status',$row['status'])->first();*/

    return new Product([
            'title'=>$row['title'],
            'slug'=>Str::slug('title'),
            'summary'=>$row['summary'],
            'description'=>$row['description'],
            'photo'=>$row['photo'],
            'stock'=>$row['stock'],
            'condition'=>$row['condition'],
            'status'=>$row['status'],
            'price'=>$row['price'],
            'discount'=>$row['discount'],
            'is_featured'=>$row['is_featured'],
            'cat_id'=>$row['cat_id'],
            'child_cat_id'=>$row['brand_id']
           ]);
    }
    public function chunkSize(): int
    {
        return 5000;
    }
}
