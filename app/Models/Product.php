<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory, Notifiable, SoftDeletes, HasTranslations, Searchable;
    public $translatable  = ['name', 'desc'];
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', //
        'Quantity', //
        'market', //
        'price', //
        'desc', //
        'category_id', //
        'target', //
        'Color', //
        'Concerns', //
        'Finish', //
        'Formulation', //
        'Benefits',  //
        'Skin', // //
        'Ingredient', // //
        'Size', //
        'offer_id'
    ];

    protected $searchable = [
        'title',
        'desc',
    ];

    public function categoryName(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id');
    }
}
