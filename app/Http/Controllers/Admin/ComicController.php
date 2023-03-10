<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
require_once __DIR__.'/../../../functions/DataValidation.php';

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
        return view("comics.index", compact('comics'));
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
        
        getValidation($request);

        $data = $request->all();


        $new_comic = new Comic();


        $new_comic->fill($data);
        // if (!empty ($new_comic->title = $data['title'])) {
        //     $new_comic->fill($data);
        // }else{
        //     return view('comics.error');
        // }
        // $new_comic ->description = $data['description'];
        // $new_comic ->price = $data['price'];
        // if (!empty ($new_comic ->series = $data['series'])) {
        //     $new_comic ->series = $data['series'];
        // }else{
        //     dd('non puoi lasciare il campo vuoto');
        // }
        // $new_comic ->sale_date = $data['sale_date'];
        // $new_comic ->type = $data['type'];
        
        $new_comic->save();

        return redirect()->route('comics.show' , $new_comic->id);
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        getValidation($request);
        $data = $request-> all();

        $comic->update($data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
