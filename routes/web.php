<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\FactController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\TopicController;

// Livewire
use App\Livewire\Admin\AboutUs;
use App\Livewire\Admin\CategoryArticleIndex;
use App\Livewire\Admin\CategoryIndex;
use App\Livewire\Admin\ContactIndex;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\FaqIndex;
use App\Livewire\Admin\PermissionIndex;
use App\Livewire\Admin\RoleIndex;
use App\Livewire\Admin\PrivacyPolicy;
use App\Livewire\Admin\SettingIndex;
use App\Livewire\Admin\TagIndex;
use App\Livewire\Admin\TagListIndex;
use App\Livewire\Admin\TermCondition;
use App\Livewire\Admin\UserIndex;

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend
Route::middleware(['throttle:global'])->group(function () {
    Route::get('facts', [FactController::class, 'index'])->name('facts');
    Route::get('facts/{id}', [FactController::class, 'show']);
    Route::get('facts/{id}/customize', [FactController::class, 'customize']);
});
Route::get('facts/tag/{tag}', [FactController::class, 'showByTag']);

Route::get('/search', [SearchController::class, 'search'])->name('fact.search');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [ArticleController::class, 'show']);
Route::get('articles/tag/{tag}', [ArticleController::class, 'showByTag']);

Route::get('/category', [CategoryController::class, 'index'])->name('category');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');

Route::get('topic', [TopicController::class, 'index'])->name('topic');
Route::get('topic/all', [TopicController::class, 'getTags']);
Route::get('topic/{letter}', [TopicController::class, 'show']);

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/policy', [PageController::class, 'policy'])->name('privacy-policy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin
Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->name('admin')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('admin.dashboard');

    Route::prefix('article')->name('articles.')->group(function () {
        Route::get('create', \App\Livewire\Admin\Article\Create::class)->name('create');
        Route::get('all', \App\Livewire\Admin\Article\Index::class)->name('all');
        Route::get('{articleId}/update', \App\Livewire\Admin\Article\Edit::class)->name('edit');
    });

    Route::prefix('fact')->name('facts.')->group(function () {
        Route::get('create', \App\Livewire\Admin\Fact\Create::class)->name('create');
        Route::get('all', \App\Livewire\Admin\Fact\Index::class)->name('all');
        Route::get('{factId}/update', \App\Livewire\Admin\Fact\Edit::class)->name('edit');
    });

    Route::get('about-us', AboutUs::class)->name('about-us.index');
    Route::get('privacy-policy', PrivacyPolicy::class)->name('privacy-policy.index');
    Route::get('term-condition', TermCondition::class)->name('term-condition.index');

    Route::get('category-article', CategoryArticleIndex::class)->name('category-article.index');
    Route::get('contacts', ContactIndex::class)->name('contacts.index');
    Route::get('categories', CategoryIndex::class)->name('categories.index');
    Route::get('faqs', FaqIndex::class)->name('faqs.index');
    Route::get('settings', SettingIndex::class)->name('settings.index');
    Route::get('tags', TagIndex::class)->name('tags.index');
    Route::get('tagslist', TagListIndex::class)->name('tagslist.index');
    Route::get('users', UserIndex::class)->name('users.index');

    Route::get('permissions', PermissionIndex::class)->name('permissions.index');
    Route::get('roles', RoleIndex::class)->name('roles.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
