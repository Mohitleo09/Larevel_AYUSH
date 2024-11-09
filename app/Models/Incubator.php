<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incubator extends Model
{
    protected $table = 'incubators';
    protected $primaryKey = 'id';
    protected $fillable = [
        'incubator_company_name',
        'incubator_city',
        'incubator_state',
        'incubator_program_duration',
        'incubator_logo',
    ];
    
    

    use HasFactory;

    // Mentor.php, Investor.php, and Incubator.php
public function user()
{
    return $this->belongsTo(User::class);
}

}
