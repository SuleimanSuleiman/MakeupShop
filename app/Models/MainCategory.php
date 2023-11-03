<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Laravel\Scout\Searchable;
use Spatie\Translatable\HasTranslations;

class MainCategory extends Model
{
    use  HasFactory, Notifiable, SoftDeletes, HasTranslations, Searchable;

    public $translatable = ['title', 'desc'];
    protected $dates = ['deleted_at'];

    protected $fillable = ['title', 'desc', 'active'];

    protected $searchable = [
        'title',
        'desc',
    ];

    public function toSearchableArray(): array
    {
        return [
            'title->' . app()->getLocale() => $this->getTranslation('title', app()->getLocale()),
            'desc->' . app()->getLocale() => $this->getTranslation('desc', app()->getLocale()),
        ];
    }

    public function subCategories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
