<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// lisätty
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//

class Chirp extends Model
{
    use HasFactory;

    // lisätty
    protected $fillable = [
        'message',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    //
}
