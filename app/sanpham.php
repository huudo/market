<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;

class SanPham extends Model implements SluggableInterface{
    use SluggableTrait;
    protected $table = 'sanpham';
    protected $sluggable = array(
        'build_from' => 'name', //Xây dựng đường dẫn từ trường 'name'
        'save_to'   => 'slug'   //Lưu tên đường dẫn vào trường 'slug'
    );
    public static function createss(){
        $product = new SanPham;
        $product ->name = "Rau muống";
        $product ->tloai_id = 1;
        $product -> price = "3000";
        $product ->weigh = "0.5Kg";
        $img ->img = "product.jpg";
        $product->save();
        return false;
    }
}