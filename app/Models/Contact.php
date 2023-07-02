<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
    protected $table =  'contact';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'contact_name',
        'email',
        'subject',
        'phone',
        'message' 
    ];
}
