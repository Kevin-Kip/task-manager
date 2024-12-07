<?php

namespace App\Models;

use App\HasTitleSlug;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasTitleSlug;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'priority',
        'completed',
        'project_id'
    ];

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($task) {
            $task->slug = $task->generateTitleSlug($task->name);

            $lastPriority = self::where('project_id', $task->project_id)
                ->max('priority');

            $newPriority = $lastPriority !== null ? $lastPriority + 1 : 1;
            $task->priority = $newPriority;
        });
    }
}
