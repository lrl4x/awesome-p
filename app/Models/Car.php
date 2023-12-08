<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable =[
        'name','description','phone','region','price','image_path','user_id'
    ];
    protected $table = 'car';
    use HasFactory;
    protected function user(){
        return $this->belongsTo(User::class);
    }
}
