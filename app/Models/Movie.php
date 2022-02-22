<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'synopsys', 'duration', 'cover'] ; 

    protected $casts = [

        'released_at' => 'datetime:Y-m-d',
    ];

    public function formatduration() 

    {
        $hours = floor($this->duration /60); // 134 => 2

        $minutes = $this->duration % 60 ; // 134 => 14

        return $hours.'h'.$minutes; 


    }
}
