<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\zanr;




class FilmoviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function zanr(){
        $zanr=zanr::get();
        return view('unos', ['zanr'=>$zanr]);
     }


    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filmovi = new FilmoviController;
		$filmovi->naslov = $request->all()['naslov'];
		if ($request->all()['description']) $filmovi->description = $request->all()['description'];
		else $filmovi->description = "";
		$filmovi->amount = $request->all()['amount'];
		$filmovi->price = $request->all()['price'];
		if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $extension = $request->image->extension();
			$filmovi->image = "./slike/".$filmovi->name.".".$extension;
			$file = $request->file('image');
			$file->move( "slike", $filmovi->name.".".$extension );
        }
		else $filmovi->image = "";
		$filmovi->save();
		return redirect( '/' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
