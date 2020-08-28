<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotations extends Model
{
    protected $table = 'quotations';
    protected $primaryKey = 'quotation_id';
    public $timestamps = false;
}