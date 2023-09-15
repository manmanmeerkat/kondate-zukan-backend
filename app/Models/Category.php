<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // カテゴリーに関連するレシピのリレーションシップ
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
