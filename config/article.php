<?php

return [
    // Hình đại diện của bài viết, lưu trong thư mục con của <upload:>
    'featured_image' => [
        'dir' => 'images/articles',
        'width' => 490,
        'height' => 294,
        'width_sm' => 110,
        'height_sm' => 80,
    ],

    'display' => [
        'show_time' => false,
        'show_author' => false,
    ],
    /**
     * Khai báo middlewares cho các Controller
     */
    'middlewares' => [
        'frontend' => ['web'],
        'backend' => ['web', 'auth'],
    ],

    // Định nghĩa menus cho category
    'menus' => [
        'backend.sidebar.content.article' => [
            'priority' => 1,
            'url' => 'route:backend.article.index',
            'label' => 'trans:article::common.article',
            'icon' => 'fa-newspaper-o',
            'active' => 'backend/article*',
        ],
    ],
    'menuTypes' => [
        'article' => [
            'title' => 'trans::article::menu.article.title',
            'icon' => 'newspaper-o',
            'class' => \Datlv\Article\Menus\ArticleMenu::class,
        ],
        'article_category' => [
            'title' => 'trans::article::menu.article_category.title',
            'icon' => 'sitemap',
            'class' => \Datlv\Article\Menus\ArticleCategoryMenu::class,
        ],
    ],

    'widgets' => [
        'article' => [
            'title' => 'trans::article::widget.article.title',
            'description' => 'trans::article::widget.article.description',
            'icon' => 'newspaper-o',
            'class' => \Datlv\Article\Widgets\ArticleWidget::class,
        ],
        'article_category' => [
            'title' => 'trans::article::widget.article_category.title',
            'description' => 'trans::article::widget.article_category.description',
            'icon' => 'sitemap',
            'class' => \Datlv\Article\Widgets\ArticleCategoryWidget::class,
        ],
        'latest_articles' => [
            'title' => 'trans::article::widget.latest_articles.title',
            'description' => 'trans::article::widget.latest_articles.description',
            'icon' => 'list',
            'class' => \Datlv\Article\Widgets\LatestArticlesWidget::class,
        ],
    ],
];
