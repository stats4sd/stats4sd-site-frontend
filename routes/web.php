<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return redirect('/home');
});

// Level 1 Pages
Route::view('/home', 'home')->name('home');
Route::view('/we-do', 'we-do')->name('we-do');
Route::get('/team', function () {
    $teamData = json_decode(file_get_contents(base_path('resources/data/team.json')), true);
    return view('team', ['teamData' => $teamData]);
});
Route::view('/where-we-work', 'where-we-work')->name('where-we-work');
Route::view('/about', 'about')->name('about');

Route::get('/blog', function () {
    $blogs = Article::latest()->paginate(12);;
    return view('blog', compact('blogs'));
})->name('blog');

Route::get('/blog/{slug}', function ($slug) {
    $article = Article::with(['category', 'tags'])->where('slug', $slug)->firstOrFail();
    return view('article', compact('article'));
});

// Level 2: we-do
Route::prefix('we-do')->name('we-do.')->group(function () {
    Route::view('/sustainable-devlopment', 'we-do.sustainable-devlopment')->name('sustainable-devlopment');
    Route::view('/research-methods', 'we-do.research-methods')->name('research-methods');
    Route::view('/food-systems', 'we-do.food-systems')->name('food-systems');
    Route::view('/data-systems', 'we-do.data-systems')->name('data-systems');
    Route::view('/m-and-e', 'we-do.m-and-e')->name('m-and-e');
    Route::view('/e-learning', 'we-do.e-learning')->name('e-learning');

    // Level 3: research-methods
    Route::prefix('research-methods')->name('research-methods.')->group(function () {
        Route::view('/ai', 'we-do.research-methods.ai')->name('ai');
        Route::view('/design-support', 'we-do.research-methods.design-support')->name('design-support');
        Route::view('/ethics', 'we-do.research-methods.ethics')->name('ethics');
        Route::view('/indicators', 'we-do.research-methods.indicators')->name('indicators');
        Route::view('/qualitative-research', 'we-do.research-methods.qualitative-research')->name('qualitative-research');
        Route::view('/statistical-analysis', 'we-do.research-methods.statistical-analysis')->name('statistical-analysis');
        Route::view('/surveys', 'we-do.research-methods.surveys')->name('surveys');
    });

    // Level 3: food-systems
    Route::prefix('food-systems')->name('food-systems.')->group(function () {
        Route::view('/agroecology', 'we-do.food-systems.agroecology')->name('agroecology');
        Route::view('/research', 'we-do.food-systems.research')->name('research');
        Route::view('/transformation', 'we-do.food-systems.transformation')->name('transformation');
    });

    // Level 3: data-systems
    Route::prefix('data-systems')->name('data-systems.')->group(function () {
        Route::view('/collection-management-systems', 'we-do.data-systems.collection-management-systems')->name('collection-management-systems');
        Route::view('/dashboards', 'we-do.data-systems.dashboards')->name('dashboards');
        Route::view('/databases', 'we-do.data-systems.databases')->name('databases');
    });

    // Level 3: e-learning
    Route::prefix('e-learning')->name('e-learning.')->group(function () {
        Route::view('/blogs', 'we-do.e-learning.blogs')->name('blogs');
        Route::view('/courses', 'we-do.e-learning.courses')->name('courses');
        Route::view('/resources-library', 'we-do.e-learning.resources-library')->name('resources-library');
        Route::view('/videos', 'we-do.e-learning.videos')->name('videos');
        Route::view('/webinars', 'we-do.e-learning.webinars')->name('webinars');
    });
});


Route::view('/privacy-policy', 'privacy-policy')->name('privacy-policy');
