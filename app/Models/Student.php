<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile', 'teacher_id'];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
    use HasFactory;
}
