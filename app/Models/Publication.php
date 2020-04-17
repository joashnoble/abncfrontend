<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'cms_newspublication';
    protected $primaryKey = 'news_id';
    public $timestamps = false;
}