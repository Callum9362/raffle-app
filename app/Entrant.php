<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrant extends Model
{
    protected $fillable = ['fullname', 'telephone', 'raffle', 'won'];
}
