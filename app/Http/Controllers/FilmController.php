<?php
#Ahmad Diksa Sumadiono
namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FilmController extends Controller {
    // Menampilkan semua film
    public function index() {
        return response()->json(Film::all(), Response::HTTP_OK);
    }

    // Menyimpan data film baru
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|unique:films',
            'genre' => 'required',
            'director' => 'required',
            'release_year' => 'required|integer',
            'rating' => 'required|numeric|min:0|max:10'
        ]);

        $film = Film::create($request->all());
        return response()->json($film, Response::HTTP_CREATED);
    }

    // Menampilkan film berdasarkan ID
    public function show($id) {
        $film = Film::find($id);
        if (!$film) {
            return response()->json(['message' => 'Film not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json($film, Response::HTTP_OK);
    }

    // Mengupdate data film
    public function update(Request $request, $id) {
        $film = Film::find($id);
        if (!$film) {
            return response()->json(['message' => 'Film not found'], Response::HTTP_NOT_FOUND);
        }

        $request->validate([
            'title' => 'unique:films,title,' . $id,
            'rating' => 'numeric|min:0|max:10'
        ]);

        $film->update($request->all());
        return response()->json($film, Response::HTTP_OK);
    }

    // Menghapus film berdasarkan ID
    public function destroy($id) {
        $film = Film::find($id);
        if (!$film) {
            return response()->json(['message' => 'Film not found'], Response::HTTP_NOT_FOUND);
        }
        
        $film->delete();
        return response()->json(['message' => 'Film deleted'], Response::HTTP_OK);
    }

    // Menampilkan film berdasarkan rating tertentu
    public function filterByRating($rating) {
        $films = Film::where('rating', '>=', $rating)->get();
        return response()->json($films, Response::HTTP_OK);
    }

    # Menampilkan film dalam format HTML
    public function viewFilms() {
        $films = Film::all();
        return view('films.index', compact('films'));
    }
    
}
