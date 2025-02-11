<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Witness extends Model
{
    protected $table = 'witnesses';

    public function investigation()
    {
        return $this->belongsTo(Investigation::class, 'case_id');
    }
}
