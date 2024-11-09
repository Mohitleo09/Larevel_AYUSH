<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = 'mentors';
    protected $primaryKey = 'id';
    protected $fillable = [
        'mentor_name',
        'Contact_Number',  // Use the correct column name here
        'gmail',
        'mentor_city',
        'mentor_state',
        'about',
        'mentor_image',
    ];
    

    

    use HasFactory;

    // Mentor.php, Investor.php, and Incubator.php
public function user()
{
    return $this->belongsTo(User::class);
}
}
