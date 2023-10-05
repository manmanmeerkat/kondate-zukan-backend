<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['recipe_id', 'name'];

    // 食材に関連するレシピのリレーションシップ
    public function recipes()
    {
        // return $this->belongsToMany(Recipe::class, 'ingredient_recipe');
        return $this->belongsTo(Recipe::class);
    }
}
