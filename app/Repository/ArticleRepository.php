<?php 

namespace App\Repository;

use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleRepository
{
    public static function InsertUpdateArticle($data, $articleId = null){
        
        DB::beginTransaction();
        try {
            if ($articleId) {
                Article::where('id', $articleId)->update($data);
            } else {
                $data['id'] = Str::uuid()->toString();
                Article::create($data);
            }
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
     public static function findArticleById(array $data, $articleId = null)
    {
        return Article::with('category')->find($articleId);
    }
}


?>