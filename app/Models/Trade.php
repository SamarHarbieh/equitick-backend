<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'Login',
        'Action',
        'Entry',
        'Time',
        'Symbol',
        'Price',
        'Profit',
        'Volume'
           ];
       
           
           public $timestamps = false; 
    use HasFactory;
}
