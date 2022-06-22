<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    protected static function booted()
    {
        static::deleting(function ($category) {
            if ($category->products()->exists()) {
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
