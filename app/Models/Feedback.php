<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
    protected $table =  'feedback';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'customer_id',
        'customer_name',
        'email',
        'phone',
        'content' 
    ];
}
