<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DeleteCategory extends Model
{
    use HasFactory;

    protected $table = 'delete_category';

    protected $fillable = ['admin_id', 'category_id', 'expiration_time', 'token'];
}