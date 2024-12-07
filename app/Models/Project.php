<?php

namespace App\Models;

use App\HasTitleSlug;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasTitleSlug;

    protected $fillable = [
        'title',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($project){
            $project->slug = $project->generateTitleSlug($project->title);
        });
    }
}
