<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'course_id', // Foreign key for the course
        'due_date',
    ];

    public function course() {
        return $this->belongsTo(Course::class); // Relationship to course
    }

    public function user() {
        return $this->belongsTo(User::class); // Relationship to user
    }
}
