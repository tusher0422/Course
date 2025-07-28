<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'module_id',
        'type',
        'value',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
