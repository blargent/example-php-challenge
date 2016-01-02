<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    protected $table = 'commits';

    protected $fillable = ['author', 'hash', 'date', 'msg'];
}
