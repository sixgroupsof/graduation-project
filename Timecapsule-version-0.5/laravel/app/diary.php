<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diary extends Model
{
    //指定表名
    protected $table ='diarys';
//    //指定ID
//    protected $primaryKey='id';
    public $timestamps=false;
//    protected $fillable=['thetheme','describes','expirationtime',];
}
