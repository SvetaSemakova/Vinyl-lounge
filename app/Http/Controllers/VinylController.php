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

class VinylController extends Controller
{
    public function home()
    {
    $products = Product::where('popular', 1)->get();
    $soundtrack = Product::where('soundtrack', 1)->get();
    $anime = Product::where('soundtrack', 2)->get();
    $author = Author::where('top', 1)->get();
    $reviews = Reviews::all();
    $contacts =  Contacts::all();
    return view('home', compact('products', 'soundtrack', 'anime', 'author', 'reviews', 'contacts'));
    }

    
    public function catalog()
    {
        $items = Catalog::all();
        return view('catalog', compact('items'));
    }


    public function about() {
    $contacts =  Contacts::all();
    $about = About::all();
    return view('about', compact('contacts', 'about'));
    }
    public function reviews() {
    $reviews = Reviews::all();
    return view('reviews', compact('reviews'));
    }

    public function contact() {
    $contacts =  Contacts::all();
    return view('contact', compact('contacts'));
}

    public function account() {
    return view('account');
}


public function show($id)
{
    $album = Album::findOrFail($id);
    $songs = Songs::where('author_id', $id)->get();
    $genres = Genres::where('genges_id', $id)->get();
    $authors = Author::where('auth_id', $id)->get();
    $other = Product::where('id', '<', 7)->get();

    return view('product', compact('album', 'songs', 'genres', 'authors', 'other'));
}




    public function submit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'text' => 'required|string',
        ]);

        Question::create($validated);

        return redirect()->back()->with('success', 'Ваш вопрос успешно отправлен!');
    }



public function submitrate(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string',
        'stars' => 'required|integer|min:1|max:5',
        'text' => 'required|string',
    ]);

    Reviews::create($validated);

    return redirect()->back()->with('success', 'Спасибо за ваш отзыв!');
}




public function addToCart($id)
{
    if (!auth()->check()) {
        return redirect()->route('authorization');
    }

    $userId = auth()->id();

    $cartItem = Cart::where('user_id', $userId)->where('product_id', $id)->first();

    if ($cartItem) {
        $cartItem->increment('quantity');
    } else {
        $product = Product::findOrFail($id);
        Cart::create([
            'user_id' => $userId,
            'product_id' => $product->id,
            'img' => $product->img,
            'name' => $product->name,
            'cost' => $product->price,
            'quantity' => 1,
        ]);
    }

    return redirect()->route('cart');
}

public function removeFromCart($id)
{
    if (!auth()->check()) {
        return redirect()->route('authorization');
    }

    $userId = auth()->id();

    Cart::where('user_id', $userId)->where('product_id', $id)->delete();

    return redirect()->back();
}

public function cart()
{
    if (!auth()->check()) {
        return redirect()->route('authorization');
    }

    $userId = auth()->id();
    $cart = Cart::where('user_id', $userId)->get();

    return view('cart', compact('cart'));
}


public function showRegistrationForm()
    {
        return view('register'); 
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'fio' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $validated['fio'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('authorization')->with('success');
    }







    public function showLoginForm()
    {
        return view('authorization'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $credentials['email'])->first();

        if ($admin) {
            if (Hash::check($credentials['password'], $admin->password)) {
                Auth::guard('admin')->login($admin);
                return redirect('/admin/home');
            }
        } else {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect('/');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }
}