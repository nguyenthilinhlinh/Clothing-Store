<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
    protected $table = 'product';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
               'product_name',
               'category_id',
               'price',
               'description',
               'images',
               'quantity',
               'status'
    ];
}
