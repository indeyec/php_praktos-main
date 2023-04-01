<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vid_room extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id',
        'Name',
    ];

}