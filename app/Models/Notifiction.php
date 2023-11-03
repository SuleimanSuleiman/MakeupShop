<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notifiction extends Model
{
    use HasFactory;

    protected $table = 'notifictions';


    protected $fillable = ['message', 'admin_Id', 'object_type', 'object_id'];

    public function BelongToAdmin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_Id');
    }
}
