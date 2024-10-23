<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etender extends Model
{
    protected $fillable = ['name', 'user_id','sdate','edate','img_url'];
}
