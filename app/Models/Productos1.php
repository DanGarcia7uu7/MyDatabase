<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos1 extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'productos1s';
}
