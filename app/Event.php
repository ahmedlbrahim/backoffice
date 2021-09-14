<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $table = "Events";

    protected $fillable = [
        'nom',
        'email',
        'phone',
        'institution',
        'fonction',
        'ministere',
        'questions'
    ];

}
