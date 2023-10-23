<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class DishSearchController extends Controller
{
    public function searchByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料からの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchJapaneseFoodByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンルからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 1)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchJapaneseSyusaiByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 1)->where('category_id', 1)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchJapaneseFukusaiByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 1)->where('category_id', 2)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchJapaneseShirumonoByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 1)->where('category_id', 3)->where('user_id', $user_id)->get();
        return response()->json(['recipes' => $recipes]);
    }

    public function searchJapaneseOthersByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 1)->where('category_id', 4)->where('user_id', $user_id)->get();
        return response()->json(['recipes' => $recipes]);
    }

    public function searchWesternFoodByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンルからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 2)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchWesternSyusaiByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 2)->where('category_id', 1)->where('user_id', $user_id)->get();

        // user_idが指定されている場合、それに一致するもののみを取得


        return response()->json(['recipes' => $recipes]);
    }


    public function searchWesternFukusaiByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 2)->where('category_id', 2)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchWesternShirumonoByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 2)->where('category_id', 3)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchWesternOthersByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 2)->where('category_id', 4)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchChineseFoodByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 3)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchChineseSyusaiByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 3)->where('category_id', 1)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchChineseFukusaiByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 3)->where('category_id', 2)->where('user_id', $user_id)->get();
        return response()->json(['recipes' => $recipes]);
    }

    public function searchChineseShirumonoByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 3)->where('category_id', 3)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function searchChineseOthersByIngredient(Request $request)
    {
        $ingredient = $request->input('ingredient');
        $user_id = $request->input('user_id');

        // 材料とジャンル、カテゴリーからの検索ロジックを実装
        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredient) {
            $query->where('name', 'like', '%' . $ingredient . '%');
        })->where('genre_id', 3)->where('category_id', 4)->where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }
}
