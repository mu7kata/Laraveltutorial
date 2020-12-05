<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    use HasFactory;


    protected $table = 'restdata';
    //メンバ変数（クラスの中に定義されている変数）テーブル名を指定するため
    protected $guarded = array('id');

    public static $rules = array(
        'message' => 'required',
        'url' => 'required'
    );

    public function getData()
    {
        return $this->id . ':' . $this->message . '(' . $this->url . ')';
    }
}
