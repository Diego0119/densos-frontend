<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'category_attribute');
    }

    public function notices()
    {
        return $this->hasMany(Notice::class);
    }
}
