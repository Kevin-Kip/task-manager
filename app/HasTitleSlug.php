<?php

namespace App;

use Illuminate\Support\Str;

trait HasTitleSlug
{
    /**
     * Generate a unique slug for the model.
     *
     * @param string $name
     * @param string $slugColumn
     * @return string
     */
    public function generateTitleSlug(string $name, string $slugColumn = 'slug'): string
    {
        // Generate the initial slug
        $slug = Str::slug($name);
        $originalSlug = $slug;

        $count = 1;

        // Check for uniqueness
        while (self::where($slugColumn, $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}
