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
<<<<<<< HEAD
        $request->validate($this->validations);
        
        $data = $request->all();

        $newTravel = new Travel();
        $newTravel->date = $data["date"];
        $newTravel->title = $data["title"];
        $newTravel->text = $data["text"];
        $newTravel->image = $data["image"];
        $newTravel->country = $data["country"];
        $newTravel->save();


        return redirect()->route("travel.show", ["travel" =>$newTravel->id]);
=======
        $request->validate([
            'date'          => 'required',
            'title'         => 'string|required',
            'text'          => 'string|required',
            'image'         => 'required',
            'country'       => 'string|required',
            'city'          => 'string|required',
        ]);

        
        $data       = $request->all();
        $newTravel  = new Travel();

        $newTravel->date            = $data['date'];
        $newTravel->title           = $data['title'];
        $newTravel->text            = $data['text'];
        $newTravel->image           = $data['image'];
        $newTravel->country         = $data['country'];
        $newTravel->city            = $data['city'];
        $newTravel->save();

        return redirect()->route('travels.index');
>>>>>>> origin/createContent
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        return view("travel.show", compact("travel"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $travel)
    {
        return view("travel.edit", compact("travel"));
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