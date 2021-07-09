<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\Session\Session;

use App\Comic;
use Psy\Command\DumpCommand;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Session $session)
    {
        $viewData = [];

        $filteredData = $session->get("data");

        if (!is_null($filteredData) && count($filteredData) > 0) {
            $viewData = $filteredData;
        } else {
            $viewData = Comic::all();
        }

        

        return view("comics.index", compact("viewData"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        
        
        $request->validate([
            "title"=>"required",
            "description"=>"required",
            "series"=>"required"
        ]);

        

        $newComic = new Comic;
        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->thumb = $data["thumb"];
        $newComic->price = $data["price"];
        $newComic->series = $data["series"];
        $newComic->sale_date = $data["sale_date"];
        $newComic->type = $data["type"];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::find($id);
        $formData = $request->all();

        $comic->update($formData);

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect("comics");
    }

    public function filter(Request $request)
    {
        //metto in una variabile i filtri
        $filters = $request->all();

        //creo un array vuoto dove verranno pushate le condizioni con i loro metodi per filtrare
        $conditions = [];

        //creo abbino i filtri ai metodi e li pusho in conditions
        if(isset($filters["inputTitle"])) {
            $conditions[] = ['title', 'like', '%' . $filters['inputTitle'] . '%'];
        }

        if(isset($filters["inputDescription"])) {
            $conditions[] = ['description', 'like', '%' . $filters['inputDescription'] . '%'];
        }

        if(isset($filters["inputType"])) {
            $conditions[] = ['type', $filters['inputType']];
        }


        //utilizzo comics::where per cercare fumetti che rispettino le mie condizione, e get per prenderli
        $comics = Comic::where($conditions)->get();

        //ritorno comics.index dove l'array su cui farta il foreach è il mio nuovo comics, ovver l'array filtrato
        return redirect()->route("comics.index")->with('data', $comics);
        
    }
}
