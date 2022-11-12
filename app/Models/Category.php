<?php

namespace App\Models;

use App\Models\Setters\CategorySetter;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use CategorySetter;

    protected $fillable = [
        'title',
        'slug',
        'description',
    ];

    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
