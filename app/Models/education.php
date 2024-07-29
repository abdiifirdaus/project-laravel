<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class education extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'thumbnail', 'content', 'link'];

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('thumbnail') && ($model->getoriginal('thumbnail') !==null)) {
                Storage::disk('public')->delete($model->getoriginal('thumbnail'));
            }
        });
    }
}
