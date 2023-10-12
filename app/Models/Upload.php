<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'product_id'];

    protected $table = 'imgs';


    public function BelongsToProduct(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}