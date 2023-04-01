<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model 
{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'id',
       'Name',
       'Vid_id',
       'Subdivision_id',
       'id_room',
   ];

}