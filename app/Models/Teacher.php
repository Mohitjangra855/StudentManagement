<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = ['name', 'email', 'phone', 'address'];
    protected $primaryKey = 'id';
    public $timestamps = true;

     public function students()
    {
        return $this->hasMany(Student::class, 'teacher_id', 'id');
    }

   use HasFactory;
}
