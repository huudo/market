<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use App\TheLoai;
class DanhMuc extends Model implements SluggableInterface{
    use SluggableTrait;
    protected $table = 'danhmuc';
    protected $sluggable = array(
        'build_from' => 'name', //Xây dựng đường dẫn từ trường 'name'
        'save_to'   => 'slug'   //Lưu tên đường dẫn vào trường 'slug'
    );
    public static function getDanhMuc(){

        $result = DanhMuc::all();
        return $result;
    }
    public static function getInfoPage($slug){
        $result = DanhMuc::where('slug',$slug)->first();
        return $result;
    }
    public static function getListMenu($slug){
        $id = DanhMuc::where('slug',$slug)->first();
        $result = TheLoai::where('dmuc_id',$id['id'])->get();
        return $result;
    }
}