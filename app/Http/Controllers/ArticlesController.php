<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use App\Models\Newsletter;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id = 2)
    {
        $articles = Articles::latest();
        if ($id) {
            $newsletter = Newsletter::where('id', $id)->first();
            $articles->where('newsletter_id', $id);
        }
        $articles = $articles->paginate(5);
        return view('layouts.showArticles', [
            'newsletter' => $newsletter,
            'articles' => $articles,
            'newsletter_id' => $id
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('layouts.createArticle', ['newsletter' => Newsletter::findOrFail($id),]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'newsletter_id' => 'required|integer',
            'Title' => 'required|max:255',
            'Content' => 'required',
            'ImageURL' => 'required|url|max:255',
        ]);

        Articles::create($request->all());

        return redirect()->route('newsletters.index')->with('success', 'Article created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('newsletters.show', [
            'article' => Articles::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('newsletters.editArticle', [
            'article' => Articles::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articles $article)
    {
        $request->validate([
            'Title' => 'required|max:255',
            'Content' => 'required',
            'ImageURL' => 'required|url|max:255',
        ]);

        // $article->update($request->only(['title', 'content', 'image_url']));
        // Validation for required fields (and using some regex to validate our numeric value)

        $article = Articles::find($request->get('id'));

        // Getting values from the blade template form
        $article->Title = $request->get('Title');
        $article->Content = $request->get('Content');
        $article->ImageURL = $request->get('ImageURL');
        $article->save();


        return redirect()->route('newsletters.index')->with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Articles::find($id);
        $article->delete();

        return redirect()->route('newsletters.index')->with('success', 'Article deleted successfully');
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required',
        ]);

        $query = $request->input('query');
        $articles = Articles::where('title', 'LIKE', "%$query%")
            ->orWhere('content', 'LIKE', "%$query%")
            ->paginate(5);

        return view('newsletters.search', compact('articles', 'query'));
    }
}