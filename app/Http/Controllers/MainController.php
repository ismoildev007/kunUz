<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private function findNews($category_id)
    {
        return News::where('category_id', $category_id);
    }

    public function welcome()
    {
        $regions = News::whereNotIn('category_id', [20, 21, 22, 23])->latest()->limit(1)->get();
        $editorChoice = News::whereNotIn('category_id', [20, 21, 22, 23])->latest()->skip(1)->take(4)->get();
        $news = News::whereNotIn('category_id', [20, 21, 23])->latest()->limit(7)->get();
        $editors = $this->findNews(20)->latest()->take(3)->get();
        $currentNews = $this->findNews(21)->latest()->limit(1)->get();
        $currentLatest = $this->findNews(21)->latest()->skip(1)->take(4)->get();
        $hamasone = $this->findNews(22)->latest()->take(1)->get();
        $hamas = $this->findNews(22)->latest()->skip(1)->take(4)->get();
        $article = $this->findNews(23)->latest()->take(3)->get();

        return view('main.welcome', compact('regions', 'article', 'hamasone', 'hamas', 'currentNews', 'editors', 'editorChoice', 'news', 'currentLatest'));

    }

    public function uzbek()
    {
        $regions = News::whereNotIn('category_id', [13, 20, 21, 22])->latest()->limit(1)->get();
        $editorChoice = News::whereNotIn('category_id', [13, 20, 21, 22])->latest()->skip(1)->take(4)->get();
        $news = News::whereNotIn('category_id', [20, 21, 22])->latest()->limit(7)->get();
        $latestNews = News::whereNotIn('category_id', [13, 20, 21, 22])->latest()->take(12)->get();

        return view('main.uzbek', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }

    public function contact()
    {
        return view('footer.contact');
    }

    public function about()
    {
        return view('footer.about');
    }
}
