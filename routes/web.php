<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::allPublishedPosts()
        ->sortByDesc('created_at')
    ]);
});

Route::get('post/{slug}', function ($slug) {
    return view('post', [
        'post' => Post::findBySlug($slug)
    ]);
});

Route::get('upload', function () {
    return view('upload');
});

// Create post method for creating a post
Route::post('upload', function () {
    $post = new Post();
    $post->title = request('title');
    $post->slug = request('slug');
    $post->description = request('description');

    if ($post->filepath_docx = request('filepath_docx')) {
        $post->filepath_docx = request('filepath_docx')->store('/Users/patrick/Documenten/GitHub/juffen.nl/public');
    }
    if ($post->filepath_pdf = request('filepath_pdf')) {
        $post->filepath_pdf = request('filepath_pdf')->store('/Users/patrick/Documenten/GitHub/juffen.nl/public');
    }

    $post->save();
    return redirect('/upload');
});

Route::get('uploads/{file}', function($file){
    if ($file == null) {
        return abort(404);
    }
    return response()->download(storage_path('app/uploads/' . $file));
});
