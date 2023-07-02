<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class VisitorCount extends Model
{
    protected $table =  'visit_count';
    protected $primaryKey = 'id';
    protected $ip = 'ip';
    public $timestamps = true;
    protected $fillable = [
    'ip','sessionKey'
    ];
}
