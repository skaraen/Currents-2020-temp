<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternDetails extends Model
{
    protected $table      = "interndetails";
    protected $fillable   = [
        'name',
        'roll',
        'email_id',
        'phone',
        'year',
        'project',
        'sop' ];
}
