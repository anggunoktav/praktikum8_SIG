<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Provinces extends Model
{
    use HasFactory;
    protected $table = 'provinces';
    protected $fillable =['name', 'alt_name', 'latitude', 'longitude'];
}
