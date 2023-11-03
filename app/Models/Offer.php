<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Offer extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['OfferName', 'desc'];

    protected $fillable = ['OfferName', 'DiscountPercentage', 'startDate', 'EndDate', 'pathImg', 'desc'];

    public function OfferSubCategory(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function OfferProducts(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}