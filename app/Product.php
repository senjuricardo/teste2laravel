<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Project;
use App\Category;

class Product extends Model
{
    protected $fillable = [
        'name',
        'details',
        'category_id',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    use SoftDeletes;
}
