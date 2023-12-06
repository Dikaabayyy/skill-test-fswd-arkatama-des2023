<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Data extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function splitdata($data){
        $split = explode(' ', $data['datainput']);

        return $split;
    }
}

