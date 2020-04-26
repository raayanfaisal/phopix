<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $fillable = [
        'name', 'mail', 'messege',
];
}
