<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
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

