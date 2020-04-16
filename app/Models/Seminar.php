<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $table = 'cms_seminars';
    protected $primaryKey = 'seminar_id';
    public $timestamps = false;
}