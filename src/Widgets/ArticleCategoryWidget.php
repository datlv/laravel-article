<?php namespace Datlv\Article\Widgets;

use Datlv\Category\Widgets\CategoryWidgetType;
use Datlv\Category\Category;
use CategoryManager;
use Datlv\Article\Article;

/**
 * Class ArticleCategoryWidget
 *
 * @package Datlv\Article\Widgets
 */
class ArticleCategoryWidget extends CategoryWidgetType
{
    protected function categoryType()
    {
        return Article::class;
    }
}
