<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Int_;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $documents = Document::latest()->paginate(5);

        return view('documents.index', compact('documents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all(['id','name']);
        return view('documents.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price_per_day'=> 'required',
            'price_per_week'=> 'required',
            'price_per_month'=> 'required',
            'user_id'=> 'required',
            'genre_id'=> 'required',
            'path' => 'required|mimes:txt,pdf|max:2048',
        ]);  
        $path = $request->file('file')->store('public/files');
        $doc = new Document;
        $doc->name = $request->name;
        $doc->description = $request->description;
        $doc->price_per_day = $request->price_per_day;
        $doc->price_per_week = $request->price_per_week;
        $doc->price_per_month = $request->price_per_month;
        $doc->user_id = $request->user_id;
        $doc->genre_id = $request->genre_id;
        $doc->path = $path;
        //Document::create($request->all());
     
        return redirect()->route('documents.index')
                        ->with('success','Document created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return view('documents.show',compact('document'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        $genres = Genre::all(['id','name']);
        return view('documents.edit',compact('document'), compact('genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price_per_day'=> 'required',
            'price_per_week'=> 'required',
            'price_per_month'=> 'required',
            'user_id'=> 'required',
            'genre_id'=> 'required',
            'path' => 'required|mimes:txt,pdf|max:2048',
        ]);  
        $path = $request->file('file')->store('public/files');
        $doc = new Document;
        $doc->name = $request->name;
        $doc->description = $request->description;
        $doc->price_per_day = $request->price_per_day;
        $doc->price_per_week = $request->price_per_week;
        $doc->price_per_month = $request->price_per_month;
        $doc->user_id = $request->user_id;
        $doc->genre_id = $request->genre_id;
        $doc->path = $path;
        //Document::create($request->all());
        
        return redirect()->route('documents.index')
                        ->with('success','Document updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
    
        return redirect()->route('documents.index')
                        ->with('success','Document deleted successfully');
    }

    /**
     * Display the specified resource for a particular user.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function mine(Int $user)
    {
        $documents = Document::where('user_id', $user)->get();

        return view('documents.mine', compact('documents'));
    }
}
