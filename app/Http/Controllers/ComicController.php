<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $comics = Comic::all();
       return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {

    //metto le condizioni
    /*
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'nullable|max:65535',
            'thumb' => 'required|url|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:30',
            'sale_date' => 'required',
            'type' => 'required|max:50',
        ]);

        $form_data = $request->all();
*/

// un altro alternativa per cambiare il message di errore in lingua italiana con validated e il file requests;
        $form_data = $request->validated();

        $newComic = new Comic();

       /* $newComic->title = $form_data['title'];
        $newComic->description = $form_data['description'];
        $newComic->thumb = $form_data['thumb'];
        $newComic->price = str_replace("$","",$form_data['price']);
        $newComic->series = $form_data['series'];
        $newComic->sale_date = $form_data['sale_date'];
        $newComic->type = $form_data['type'];
*/
// fill($form_data) prende tutti i dati dinamichamente
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::findOrFail($id);
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::findOrFail($id);
        return view('comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, $id)
    {
/*
        $request->validate([
            'title' => 'required|max:5',
            'description' => 'nullable|max:65535',
            'thumb' => 'required|url|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:30',
            'sale_date' => 'required',
            'type' => 'required|max:50',
        ]);

         
        $form_data = $request->all();
*/
        $comics = Comic::findOrFail($id);
        $form_data = $request->validated();

        $comics->update($form_data);
        return redirect()->route('comics.show', ['comic'=>$comics->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $comics = Comic::findOrFail($id);
          $comics->delete();
          return redirect()->route('comics.index');
    }
}
