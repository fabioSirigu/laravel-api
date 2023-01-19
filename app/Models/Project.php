<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'date', 'cover_image', 'type_id'];

    public static function createSlug($title)
    {
        $project_slug = Str::slug($title);
        return $project_slug;
    }

    /**
     * Get the type that owns the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
    /* 
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}
