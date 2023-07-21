<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'province_id', 'id')->whereNull('parent_id');
    }
}
