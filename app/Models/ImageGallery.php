<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    protected $table = 'image_gallery';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
               'product_id',
               'file_path'
    ];

}
