<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RecipeFactory; // ここに追加

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'genre_id', 'category_id', 'reference_url', 'image_path'];


    // レシピに関連する食材の多対多のリレーションシップ
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredient_recipe');
    }

    // レシピに関連するジャンルのリレーションシップ
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    // レシピに関連するカテゴリーのリレーションシップ
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
