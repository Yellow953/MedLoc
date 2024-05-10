<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Med extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter($q)
    {
        if (request('text')) {
            $text = request('text');
            $q->where('name', 'LIKE', "%{$text}%")->orWhere('description', 'LIKE', "%{$text}%")->orWhere('type', 'LIKE', "%{$text}%");
        }

        return $q;
    }
}
