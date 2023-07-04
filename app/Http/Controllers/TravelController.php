<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{

    private $validations = [
        "date"          => "required|date",
        "title"         => "required|string|max:50",
        "text"          => "required|string",
        "image"         => "required|string",
        "country"       => "required|string|max:25",
        "city"          => "required|string|max:50",
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Travel::paginate(3); 


        return view('travels.index', compact('travels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("travels.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        return view("travels.show", compact("travel"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $travel)
    {
        return view("travels.edit", compact("travel"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel $travel)
    {
        $request->validate($this->validations);

        $data = $request->all();

        // aggiornare i dati nel db
        $comic->date            = $data["date"];
        $comic->title           = $data["title"];
        $comic->text            = $data["text"];
        $comic->image           = $data["image"];
        $comic->country         = $data["country"];
        $comic->update();

        // altro metodo per fare il redirect
        return to_route("travels.show", ["travel" => $travel->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}