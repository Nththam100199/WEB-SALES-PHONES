<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Constant extends Model
{
    protected $table = 'constants';
    protected $fillable = ['constant','value','name','type','sort'];
}
