<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Author extends Model
{
    protected $fillable = ['name', 'bio', 'slug']; // Ensure 'slug' is also fillable if you're using mass assignment

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($author) {
            // Generate the slug and ensure it is unique
            $author->slug = static::generateUniqueSlug($author->name);
        });
    }

    /**
     * Generate a unique slug based on the author's name.
     *
     * @param string $name
     * @return string
     */
    protected static function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = Author::where('slug', 'like', "{$slug}%")->count();
        return $count > 0 ? "{$slug}-{$count}" : $slug;
    }
}