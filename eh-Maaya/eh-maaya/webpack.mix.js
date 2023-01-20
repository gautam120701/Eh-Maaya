var mix = require('laravel-mix');
require('laravel-mix-purgecss');

//home
mix.styles('assets/css/home/home-critical.css','assets/dist/css/home/home-critical.css');
mix.styles('assets/css/home/home.css','assets/dist/css/home/home.css');

//article
mix.styles('assets/css/article/article-critical.css','assets/dist/css/article/article-critical.css');
mix.styles('assets/css/article/article.css','assets/dist/css/article/article.css');

//category
mix.styles('assets/css/category/category.css','assets/dist/css/category/category.css');

//header
mix.styles('assets/css/header/header-common.css','assets/dist/css/header/header-common.css');

//footer
mix.styles('assets/css/footer/footer-common.css','assets/dist/css/footer/footer-common.css');

//Legal pages
mix.styles('assets/css/legal-pages.css','assets/dist/css/legal-pages.css');

//Common
mix.styles('assets/css/base.css','assets/dist/css/base.css');


        mix
            .styles([
                'assets/js/slick/slick.css',
                'assets/js/slick/slick-theme.css',
            ], 'assets/dist/css/slider.css')
            .scripts([
                'assets/js/app.js',
            ], 'assets/dist/js/app.js')
            .styles([
                'assets/css/contact.css',],
                'assets/dist/css/contact.css')
        .styles([
            'assets/css/unsubscribe.css',
        ], 'assets/dist/css/unsubscribe.css')
    mix.disableNotifications();

