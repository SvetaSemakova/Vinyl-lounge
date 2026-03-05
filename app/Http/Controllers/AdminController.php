<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Catalog;
use App\Models\Author;
use App\Models\Album;
use App\Models\Reviews;
use App\Models\Contacts;
use App\Models\About;
use App\Models\Songs;
use App\Models\Genres;
use App\Models\Cart;
use App\Models\Question;
use App\Models\User;
use App\Models\Admin;

class AdminController extends Controller
{
public function index()
{
    $albums = Album::with('songs')->get();
    return view('admin.home', compact('albums'));
}

public function users()
{
    $users = User::all();
    return view('admin.users', compact('users'));
}

public function add(Request $request)
{
    $validated = $request->validate([
        'img' => 'required|image|max:2048',
        'name' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'price' => 'required|numeric',
        'popular' => 'required|integer',
        'soundtrack' => 'required|integer',
        'songs' => 'required|string',
    ]);

if ($request->hasFile('img')) {
    $file = $request->file('img');
    $relativePath = 'img/artist/' . $file->getClientOriginalName();
    $file->storeAs('public', $relativePath);
} else {
    $relativePath = null;
}
    $album = Album::create([
        'img' => $relativePath,
        'name' => $validated['name'],
        'author' => $validated['author'],
        'price' => $validated['price'],
        'popular' => $validated['popular'],
        'soundtrack' => $validated['soundtrack'],
    ]);


        $songsArray = explode(',', $validated['songs']);
    foreach ($songsArray as $songName) {
        $trimmedName = trim($songName);
        if ($trimmedName) {
            $album->songs()->create(['song' => $trimmedName]);
        }
    }


    return redirect()->back();
}


    public function destroy($id)
    {
        $item = Album::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }



public function edit($id)
{
    $album = Album::with('songs')->findOrFail($id);
    $songsString = $album->songs->pluck('song')->implode(', ');
    return view('admin.edit', compact('album', 'songsString'));
}

public function update(Request $request, $id)
{
    $album = Album::findOrFail($id);
    $album->update($request->only(['name', 'author', 'price', 'popular', 'soundtrack']));
    $songsString = $request->input('songs', '');
    $songsArray = explode(',', $songsString);

    $album->songs()->delete();

    foreach ($songsArray as $songName) {
        $trimmedName = trim($songName);
        if ($trimmedName) {
            $album->songs()->create(['song' => $trimmedName]);
        }
    }
    return redirect()->route('admin.home');
}



public function review()
{
    $reviews = Reviews::all();
    return view('admin.review', compact('reviews'));
}

public function destroy_review($id)
{
    $item = Reviews::findOrFail($id);
    $item->delete();
    return redirect()->back()->with('success');
}
public function quest()
{
    $questions = Question::all();
    return view('admin.quest', compact('questions'));
}

public function destroy_quest($id)
{
    $item = Question::findOrFail($id);
    $item->delete();
    return redirect()->back();
}

}