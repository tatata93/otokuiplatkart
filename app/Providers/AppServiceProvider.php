<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $navItems = [
            // 'url' の中身を関数 (fn() => ...) に変更
            'トップページ' => ['url' => fn() => route('top'), 'desc' => 'トップページです'],
            '記事一覧' => ['url' => fn() => route('articles'), 'desc' => '電車乗ったり電車撮ったり旅行したりカメラで遊んだりします。'],
            '海外の鉄道/旅行記' => ['url' => fn() => route('articles', ['category' => 'foreign_railway']), 'desc' => '海外の鉄道です'],
            '国内の鉄道/旅行記' => ['url' => fn() => route('articles', ['category' => 'domestic_railway']), 'desc' => '国内の鉄道です'],
            'その他のこと' => ['url' => fn() => route('articles', ['category' => 'others']), 'desc' => '鉄道以外の記事になります'],
            'シリーズ' => ['url' => fn() => route('series'), 'desc' => 'シリーズまとめ'],
            'このサイトについて' => ['url' => fn() => route('about'), 'desc' => 'このさいとについてのこと'],
        ];

        View::share('navItems', $navItems);
    }
}
