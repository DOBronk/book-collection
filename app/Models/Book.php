<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\BookFactory;

class Book extends Model
{
    use hasFactory;
    public function author(): BelongsTo {
        return $this->belongsTo('App\Models\Author');
    }

    public function reviews(): HasMany {
        return $this->hasMany('App\Models\Review');
    }
}
