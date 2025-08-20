<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'title' => 'array',
            'description' => 'array',
        ];
    }

    public function getTransTitleAttribute()
    {
        return $this->title[app()->getLocale()] ?? $this->title['en'];
    }

    function getTitleEnAttribute()
    {
        return $this->title['en'] ?? '';
    }

    function getTitleArAttribute()
    {
        return $this->title['ar'] ?? '';
    }
    public function getTransDescriptionAttribute()
    {
        return $this->description[app()->getLocale()] ?? $this->description['en'];
    }

    function getDescriptionEnAttribute()
    {
        return $this->description['en'] ?? '';
    }

    function getDescriptionArAttribute()
    {
        return $this->description['ar'] ?? '';
    }
}
