<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Task extends Model
{
    //
    protected $fillable = [
      'user_id', 'title', 'description', 'folder'
    ];
}
