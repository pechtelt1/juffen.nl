<?php

use App\Models\Group;
use App\Models\Post;
use App\Models\Subject;
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
        'posts' => Post::allPublishedPosts()->sortByDesc('created_at'),
        'groups' => Group::all(),
        'subjects' => Subject::all(),
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

Route::get('groups/{group:slug}', function (Group $group) {
    return view('posts', [
        'posts' => $group->posts,
        'currentGroup' => $group->name,
        'groups' => Group::all(),
        'subjects' => Subject::all(),
    ]);
});

Route::get('subjects/{subject:slug}', function (Subject $subject) {
    return view('posts', [
        'posts' => $subject->posts,
        'subjects' => Subject::all(),
        'groups' => Group::all(),
    ]);
});

Route::post('upload', function () {
    $post = new Post();
    $post->title = request('title');
    $post->slug = request('title');
    $post->description = request('description');
    $post->group_id = 1;
    $post->subject_id = 1;


    if ($post->filepath_docx = request('filepath_docx')) {
        $post->filepath_docx = request('filepath_docx')->store('uploads');
    }
    if ($post->filepath_pdf = request('filepath_pdf')) {
        $post->filepath_pdf = request('filepath_pdf')->store('uploads');
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
