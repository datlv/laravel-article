<?php
namespace Datlv\Article;

use Datlv\Kit\Support\VnString;
use DB;

/**
 * Class Seeder
 *
 * @package Datlv\Article
 */
class Seeder
{
    /**
     * @param array $data
     */
    public function seed($data)
    {
        DB::table('articles')->truncate();

        $articles = $data;
        foreach ($articles as &$article) {
            $article['slug'] = VnString::to_slug($article['title']);
        }

        DB::table('articles')->insert($articles);
    }
}
