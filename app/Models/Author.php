<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function book(){
        //in hasOne relationship it return only one value
        // return $this->hasOne(Book::class,'author_id','id');
        //in OneTomany Relation it return many values
        return $this->hasMany(Book::class,'author_id','id');
    }

}
