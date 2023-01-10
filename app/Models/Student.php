<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile', 'image'];

    public function message(){
        return $this->hasMany('App\Models\Message', 'student_id');
    }
}
