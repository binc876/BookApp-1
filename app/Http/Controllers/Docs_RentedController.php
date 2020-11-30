<?php

namespace App\Http\Controllers;

use App\Models\Docs_Rented;
use App\Models\Document;
use Illuminate\Http\Request;

class Docs_RentedController extends Controller
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
    public function create(Document $document)
    {
        return view('checkout', compact('document'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function rent(Request $request, Document $document)
    {
        $request->validate([
            'payment_method' => 'required',
        ]);  
        $id = auth()->user()->id;
        $doc_id = $document->id;
        $price = $request->duration *  $request->price;
        if ($request->price == $document->price_per_day) {
            $period = "days";
        }else if ($request->price == $document->price_per_week) {
            $period = "weeks";
        }else {
            $period = "months";
        }
        $status = 'pending';
        $payment_status = 0;
        $payment_method = null;
        $expiry = date("Y/m/d", strtotime("+"+$request->duration+$period));
 
        $rental= new Docs_Rented;
        $rental->user_id = $id;

        $rental->document_id = $doc_id;

        $rental->status = $status;

        $rental->price = $price;

        $rental->payment_status = 0;

        $rental->payment_method = null;

        $rental->expiry_date = $expiry;

        var_dump($rental);
        //Document::create($request->all());
        //return view('checkout', compact('document'));
        //return redirect()->route('documents.index')
                        //->with('success','Check your books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docs_rented  $docRented
     * @return \Illuminate\Http\Response
     */
    public function show(Docs_Rented $docRented)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docs_rented  $docRented
     * @return \Illuminate\Http\Response
     */
    public function edit(Docs_Rented $docRented)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docs_rented  $docRented
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docs_Rented $docRented)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docs_rented  $docRented
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docs_Rented $docRented)
    {
        //
    }
}
