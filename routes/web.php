<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $record = \App\Models\Record::all();

//     return view('record', ['record' => $record]);
//     //return view('welcome');
// });


use App\Models\Record;
use Illuminate\Http\Request;

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
    $record = \App\Models\Record::all();

    return view('record', ['record' => $record]);
});

/**
 * Add New Task
 */
Route::post('/record', function (Request $request) {
    //
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $record = new Record;
    $record->title = $request->title;
    $record->author = $request->author;
    $record->album = $request->album;
    $record->genre = $request->genre;
    $record->time = $request->time;
    $record->save();

    return redirect('/');
});

/**
 * Delete Task
 */
Route::delete('/record/{record}', function (Record $record) {
    $record->delete();

    return redirect('/');
});