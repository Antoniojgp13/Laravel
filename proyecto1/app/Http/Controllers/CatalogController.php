<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{

    public function getIndex() {

    	$arrayPeliculas = Movie::all();
    	return view('catalog.index', ['arrayPeliculas'=>$arrayPeliculas]);
    }

    public function getShow($id)
	{
		$idpage = Movie::findOrFail($id);
		return view('catalog.show', ['idpage'=> $idpage]);
	}

	public function getCreate() {
		return view('catalog.create');
	}

	public function getEdit($id){
		return view('catalog.edit', array('idpage'=>Movie::findOrFail($id)));
	}

	public function postCreate(Request $request){
		$movie = new Movie;
		$movie->title = $request->input('title');
		$movie->year = $request->input('year');
		$movie->director = $request->input('director');
		$movie->poster = $request->input('poster');
		$movie->synopsis = $request->input('synopsis');
		$movie->save();
		return redirect()->action('CatalogController@getIndex');
	}

	public function putEdit(Request $request, $id) {
		$movie = Movie::findOrFail($id);
		$movie->title = $request->input('title');
		$movie->year = $request->input('year');
		$movie->director = $request->input('director');
		$movie->poster = $request->input('poster');
		$movie->synopsis = $request->input('synopsis');
		$movie->save();
		return redirect()->action('CatalogController@getIndex');
	}

	

	
}
?>