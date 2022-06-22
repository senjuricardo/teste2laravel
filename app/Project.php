<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;

class Project extends Model
{
    protected $fillable = [
        'name',
    ];

    protected static function booted()
    {
        static::deleting(function ($project) {
            if ($project->products()->exists()) {
                throw new \Exception('Related products found');
            }
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    use SoftDeletes;
}
