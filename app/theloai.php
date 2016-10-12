<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use App\DanhMuc;
class TheLoai extends Model implements SluggableInterface{
    use SluggableTrait;
    protected $table = 'theloai';
    protected $sluggable = array(
        'build_from' => 'name', //Xây dựng đường dẫn từ trường 'name'
        'save_to'   => 'slug'   //Lưu tên đường dẫn vào trường 'slug'
    );

    public static function getTheLoai(){

        $danhmuc = DanhMuc::getDanhMuc();
        $i=0;
        $result = array();
        foreach($danhmuc as $res){
            $result[$i] = TheLoai::where('dmuc_id',$res['id'])->get();
            $i++;
        }
        return $result;
    }
   
}