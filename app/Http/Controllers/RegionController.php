<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    private function findNews($category_id)
    {
        return News::where('category_id', $category_id);
    }
    public function world()
    {
        $regions = $this->findNews(13)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(13)->latest()->skip(1)->limit(3)->get();
        $news = $this->findNews(13)->latest()->limit(8)->get();
        $latestNews = $this->findNews(13)->latest()->take(6)->get();

        return view('main.world', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }

    public function tashkent()
    {
        $regions = $this->findNews(1)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->take(3)->get();
        $news = News::latest()->limit(8)->get();
        $latestNews = $this->findNews(1)->latest()->take(6)->get();

        return view('regions.tashkent', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function karshi()
    {
        $regions = $this->findNews(2)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->limit(3)->get();
        $news = $this->findNews(2)->latest()->limit(8)->get();
        $latestNews = $this->findNews(2)->latest()->take(6)->get();

        return view('regions.karshi', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function samarkand()
    {
        $regions = $this->findNews(3)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->limit(3)->get();
        $news = $this->findNews(3)->latest()->limit(8)->get();
        $latestNews = $this->findNews(3)->latest()->take(6)->get();

        return view('regions.samarkand', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function bukhara()
    {
        $regions = $this->findNews(4)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->limit(3)->get();
        $news = $this->findNews(4)->latest()->limit(8)->get();
        $latestNews = $this->findNews(4)->latest()->take(6)->get();

        return view('regions.bukhara', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function termiz()
    {
        $regions = $this->findNews(5)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->limit(3)->get();
        $news = $this->findNews(5)->latest()->limit(8)->get();
        $latestNews = $this->findNews(5)->latest()->take(6)->get();

        return view('regions.termiz', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function jizzax()
    {
        $regions = $this->findNews(6)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->limit(3)->get();
        $news = $this->findNews(6)->latest()->limit(8)->get();
        $latestNews = $this->findNews(6)->latest()->take(6)->get();

        return view('regions.jizzax', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function nukus()
    {
        $regions = $this->findNews(7)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->limit(3)->get();
        $news = $this->findNews(7)->latest()->limit(8)->get();
        $latestNews = $this->findNews(7)->latest()->take(6)->get();

        return view('regions.nukus', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function namangan()
    {
        $regions = $this->findNews(8)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->skip(1)->limit(3)->get();
        $news = $this->findNews(8)->latest()->limit(8)->get();
        $latestNews = $this->findNews(8)->latest()->take(6)->get();

        return view('regions.namangan', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function fargana()
    {
        $regions = $this->findNews(9)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->limit(3)->get();
        $news = $this->findNews(9)->latest()->limit(8)->get();
        $latestNews = $this->findNews(9)->latest()->take(6)->get();

        return view('regions.fargana', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function andijan()
    {
        $regions = $this->findNews(10)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->limit(3)->get();
        $news = $this->findNews(10)->latest()->limit(8)->get();
        $latestNews = $this->findNews(10)->latest()->take(6)->get();

        return view('regions.andijan', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function xiva()
    {
        $regions = $this->findNews(11)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->limit(3)->get();
        $news = $this->findNews(11)->latest()->limit(8)->get();
        $latestNews = $this->findNews(11)->latest()->take(6)->get();

        return view('regions.xiva', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }

    public function sirdaryo()
    {
        $regions = $this->findNews(12)->latest()->limit(1)->get();
        $editorChoice = $this->findNews(20)->latest()->limit(3)->get();
        $news = $this->findNews(12)->latest()->limit(8)->get();
        $latestNews = $this->findNews(12)->latest()->take(6)->get();

        return view('regions.sirdaryo', compact('regions', 'editorChoice', 'news', 'latestNews'));
    }
    public function latest()
    {
        $news = News::all();
        return view('regions.latest-news', ['news', $news]);
    }

}
