<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluations extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'user_id'
    ];

    public function getname($id){
        return User::where('id',$id)->get()->first()->name;
    }
}

