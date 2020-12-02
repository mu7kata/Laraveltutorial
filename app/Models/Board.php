<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title'=>'required',
        'message'=>'requierd',
    );

    public function gatData(){
        return $this->id .':'.$this->title;
        }

}
