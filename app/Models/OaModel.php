<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OaModel extends Model
{
    use HasFactory, SoftDeletes;

    public static function last(): ?self
    {
        return static::orderByDesc('id')->first();
    }
}
