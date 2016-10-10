<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DanhMuc;
class TheLoai extends Model {

    //posts table in database
    protected $table = 'theloai';

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