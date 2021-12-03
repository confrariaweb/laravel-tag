<?php

namespace ConfrariaWeb\Tag\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        'account_id',
        'slug',
        'name',
        'color'
    ];

    public function account()
    {
        return $this->belongsTo(\ConfrariaWeb\Account\Models\Account::class, 'account_id');
    }

}
