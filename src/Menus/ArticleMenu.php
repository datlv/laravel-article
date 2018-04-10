<?php namespace Datlv\Article\Menus;

use Datlv\Menu\Types\MenuType;
use Datlv\Article\Article;

/**
 * Class ArticleMenu
 *
 * @package Datlv\Article\Menus
 */
class ArticleMenu extends MenuType
{
    public function formOptions()
    {
        return ['height' => 320] + parent::formOptions();
    }

    protected function formView()
    {
        return 'article::menu.article_form';
    }

    /**
     * @param \Datlv\Menu\Menu $menu
     *
     * @return Article|null
     */
    protected function getArticle($menu)
    {
        return empty($menu->params['article_id']) ? null : Article::find($menu->params['article_id']);
    }

    /**
     * @param \Datlv\Menu\Menu $menu
     * @return string
     */
    protected function buildUrl($menu)
    {
        return ($article = $this->getArticle($menu)) ? $article->url : "#{$menu->params['article_id']}";
    }

    protected function paramsAttributes()
    {
        return [
            [
                'name' => 'article_id',
                'title' => trans('article::menu.article.article_id'),
                'rule' => 'required|integer',
                'default' => null,
            ],
        ];
    }
}
