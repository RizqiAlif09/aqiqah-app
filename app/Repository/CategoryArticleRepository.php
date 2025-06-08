<?php
namespace App\Repository;

use Illuminate\Support\Facades\DB;
use App\Models\CategoryArticle as Category;
use Illuminate\Support\Str;

class CategoryArticleRepository
{
    public static function insertUpdateCategory(array $data, $categoryId = null)
    {
        DB::beginTransaction();
        try {
            if ($categoryId) {
                Category::where('id', $categoryId)->update($data);
            } else {
                $data['id'] = Str::uuid()->toString();
                Category::create($data);
            }
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage()); // Ini untuk debugging
        }

    }

    public static function findcategoryById($categoryId = null)
    {
        return Category::find($categoryId);
    }

}
