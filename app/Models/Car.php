<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable =[
        'car','img','name','description','price'
    ];

    use HasFactory;
    protected function user(){
        return $this->belongsTo(User::class);
    }
}
