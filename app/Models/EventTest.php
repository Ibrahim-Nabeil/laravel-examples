<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventTest extends Model
{
    use HasFactory;
    protected $table ='event_tests';
    protected $fillable = ['viewers'];
}
