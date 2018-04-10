<?php namespace Datlv\Article\Menus;

use Datlv\Category\Menus\CategoryMenuType;
use Datlv\Article\Article;

/**
 * Class ArticleCategoryMenu
 *
 * @package Datlv\Article\Menus
 */
class ArticleCategoryMenu extends CategoryMenuType
{
    /**
     * @return string
     */
    protected function categoryType()
    {
        return Article::class;
    }
}
