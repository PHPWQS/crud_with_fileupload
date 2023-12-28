<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
      'category'
    ];

    public function products(): BelongsToMany
    {
      return $this->belongsToMany(Product:: class, 'categories_products');
    }
}
