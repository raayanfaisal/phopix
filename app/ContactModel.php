<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $fillable = [
        'nme', 'mail', 'msg',
];
}
