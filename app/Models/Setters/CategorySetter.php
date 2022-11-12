<?php

namespace App\Models\Setters;

use Cocur\Slugify\Slugify;

trait CategorySetter
{

    public function setTitleAttribute($value): void
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Slugify::create()->slugify($value);
    }

    public function setSlugAttribute($value): void
    {
        if ($value === null) {
            $this->attributes['slug'] = Slugify::create()->slugify($this->attributes['title']);
        } else {
            $this->attributes['slug'] = \Str::slug($value);
        }
    }

}
