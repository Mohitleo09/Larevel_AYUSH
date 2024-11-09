<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $table = 'investors';
    protected $primaryKey = 'id';
    protected $fillable = [
        'company_name',
        'city',
        'state',
        'amount',
        'logo',
    ];
    

    use HasFactory;
    // Mentor.php, Investor.php, and Incubator.php
public function user()
{
    return $this->belongsTo(User::class);
}

}
