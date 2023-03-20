<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccessorMutators extends Model
{
    use HasFactory;
protected $table= 'user_accessor_mutators';

protected $fillable = ['name','gender'];

// i
public function setGenderAttribute($val)
{
   $this->attributes['gender'] = $val == 'mail' ? 0 :  1 ; 
}
// i

 
}
