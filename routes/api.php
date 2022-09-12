<?php

use App\Models\Head;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/v1/pages', 'Api\PageController@index');
Route::get('/v1/pages/{slug}', 'Api\PageController@show');
Route::put('/v1/pages/{slug}', 'Api\PageController@update')->middleware('auth');
Route::post('/v1/pages', 'Api\PageController@store')->middleware('auth');
Route::delete('/v1/pages/{slug}', 'Api\PageController@destroy')->middleware('auth');

Route::get('/v1/pages/{slug}/heads', function ($slug){
    return response()->json((\App\Models\Page::where('slug', $slug)->first())->heads);
});
Route::get('/v1/pages/{slug}/sections', function ($slug){
    return response()->json((\App\Models\Page::where('slug', $slug)->first())->sections);
});


Route::get('v1/heads', 'Api\HeadController@index');
Route::get('v1/heads/show/{id}', 'Api\HeadController@show');
Route::put('v1/heads/{id}', 'Api\HeadController@update')->middleware('auth');
Route::post('v1/heads', 'Api\HeadController@store')->middleware('auth');
Route::delete('v1/heads/{id}', 'Api\HeadController@destroy')->middleware('auth');

Route::get('/v1/sections', 'Api\SectionController@index');
Route::get('/v1/sections/{slug}', 'Api\SectionController@show');
Route::put('/v1/sections/{slug}', 'Api\SectionController@update')->middleware('auth');
Route::post('/v1/sections', 'Api\SectionController@store')->middleware('auth');
Route::delete('/v1/sections/{slug}', 'Api\SectionController@destroy')->middleware('auth');

Route::get('/v1/sections/{id}/text-elements', function ($id){
    return response()->json((\App\Models\Section::find($id)->first())->textElements);
});


Route::get('/v1/texts', 'Api\TextController@index');
Route::get('/v1/texts/{slug}', 'Api\TextController@show');
Route::put('/v1/texts/{slug}', 'Api\TextController@update')->middleware('auth');
Route::post('/v1/texts', 'Api\TextController@store')->middleware('auth');
Route::delete('/v1/texts/{slug}', 'Api\TextController@destroy')->middleware('auth');

Route::get('/v1/texts/{id}/section', function ($id){
    return response()->json((\App\Models\Text::find($id))->textable);
});

Route::get('/v1/anchors', 'Api\AnchorController@index');
Route::get('/v1/anchors/{slug}', 'Api\AnchorController@show');
Route::put('/v1/anchors/{slug}', 'Api\AnchorController@update')->middleware('auth');
Route::post('/v1/anchors', 'Api\AnchorController@store')->middleware('auth');
Route::delete('/v1/anchors/{slug}', 'Api\AnchorController@destroy')->middleware('auth');

Route::get('/v1/anchors/{id}/section', function ($id){
    return response()->json((\App\Models\Anchor::find($id))->anchorable);
});


Route::get('/v1/images', 'Api\ImageController@index');
Route::get('/v1/images/{slug}', 'Api\ImageController@show');
Route::put('/v1/images/{slug}', 'Api\ImageController@update')->middleware('auth');
Route::post('/v1/images', 'Api\ImageController@store')->middleware('auth');
Route::delete('/v1/images/{slug}', 'Api\ImageController@destroy')->middleware('auth');

Route::get('/v1/images/{id}/section', function ($id){
    return response()->json((\App\Models\Image::find($id))->sections);
});

//auth
Route::group([

    'middleware' => 'api',
    'prefix' => 'v1/auth'

], function ($router) {

    Route::post('login', 'Api\AuthController@login');
    Route::post('logout', 'Api\AuthController@logout');
    Route::post('refresh', 'Api\AuthController@refresh');
    Route::post('me', 'Api\AuthController@me');

});
