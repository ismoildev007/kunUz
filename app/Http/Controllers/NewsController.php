<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Models\News;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->paginate(6);
        return view('admin.index')->with('news', $news);
    }

    public function search(Request $request){
        $search = $request->input('search');

        $news = News::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('short_content', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->get();

        return view('searchable.search', compact('news'));
    }
    public function main_search(Request $request){
        $search = $request->input('search');

        $news = News::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('short_content', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->get();

        return view('searchable.main-search', compact('news'));
    }
    private function findNews($category_id)
    {
        return News::where('category_id', $category_id);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create')->with([
            'regions' => Region::all(),
            'news' => $this->findNews(1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        if ($request->hasFile('photo'))
        {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);

        }
        $news = News::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'content' => $request->content,
            'short_content' => $request->short_content,
            'photo' => $path ?? null
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.show')->with([
            'new' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.edit')->with(['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreNewsRequest $request, News $news)
    {

        if ($request->hasFile('photo'))
        {
            if (isset($news->photo))
            {
                Storage::delete($news->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $news->update([
//            'category_id' => $request->category_id,
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path ?? $news->photo,
        ]);

        return redirect()->route('news.index', ['news' => $news->id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {

        if (isset($news->photo))
        {
            Storage::delete($news->photo);
        }
        $news->delete();
        return redirect()->route('news.index');
    }
}
