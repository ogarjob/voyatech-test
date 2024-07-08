<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    use HasFactory;

    public function post(): BelongsTo
    {
        return $this->belongsTO(Post::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTO(User::class);
    }
}
