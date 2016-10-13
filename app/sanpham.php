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
    public static function getProduct(){
        $result = SanPham::all();
        return $result;
    }
    public static function getListProduct($list){
        $listData = array();
        $listId = array();
        $listId[0]['id'] = $list[0];
        $listId[0]['count'] = 1;
        for ($i=1; $i< count($list) ; $i++) { 
            # code...
            $check = true;
            $countList = count($listId);
            for($j=0; $j < $countList; $j++){
                if($listId[$j] == $list[$i]){
                    $check = false;
                    $listId[$j]['count']++;

                }
            }
            if($check == true){
                $listId[$countList]['id']= $list[$i];
                $listId[$countList]['count']= 1;
            }
        }
        return $listId;
        
        
    }
}