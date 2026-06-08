<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\AuthorFactory;

class Author extends Model
{
    use hasFactory;
    public function books(): belongsToMany {
        return $this->belongsToMany(Book::class);
    }
}
