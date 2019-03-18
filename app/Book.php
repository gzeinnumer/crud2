<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //todo 7
    protected $fillable = ['book_name', 'isbn_no', 'book_price'];

    //todo 8 php artisan make:controller BookController --resource
}
