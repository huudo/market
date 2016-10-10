<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TheLoai;
class DanhMuc extends Model {

    //posts table in database
    protected $table = 'danhmuc';

    public static function getDanhMuc(){

        $result = DanhMuc::all();
        return $result;
    }
}