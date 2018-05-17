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
use App\Models\Game;
use Illuminate\Http\Request;

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
    $game = \App\Models\Game::all();

    return view('game', ['game' => $game]);
});


/**
 * Add New Task
 */

Route::get('/shuffle', function (Game $game, Request $request) {
    $cardNums = range(1, 24); 
    shuffle($cardNums);
    $game = Game::find(1);
    $game->card1 = $cardNums[0];
    $game->card2 = $cardNums[1];
    $game->card3 = $cardNums[2];
    $game->card4 = $cardNums[3];
    $game->card5 = $cardNums[4];
    $game->card6 = $cardNums[5];
    $game->save();

    $game = Game::find(2);
    $game->card1 = $cardNums[6];
    $game->card2 = $cardNums[7];
    $game->card3 = $cardNums[8];
    $game->card4 = $cardNums[9];
    $game->card5 = $cardNums[10];
    $game->card6 = $cardNums[11];
    $game->save();

    $game = Game::find(3);
    $game->card1 = $cardNums[12];
    $game->card2 = $cardNums[13];
    $game->card3 = $cardNums[14];
    $game->card4 = $cardNums[15];
    $game->card5 = $cardNums[16];
    $game->card6 = $cardNums[17];
    $game->save();
    
    $game = Game::find(4);
    $game->card1 = $cardNums[18];
    $game->card2 = $cardNums[19];
    $game->card3 = $cardNums[20];
    $game->card4 = $cardNums[21];
    $game->card5 = $cardNums[22];
    $game->card6 = $cardNums[23];
    $game->save();

   // return redirect('/');
});


/**
 * Add New Task
 */
// Route::post('/game', function (Request $request) {
//     //
//     $validator = Validator::make($request->all(), [
//         'id' => 'required|max:255',
//         'card1' => 'required',
//         'card2' => 'required',
//         'card3' => 'required',
//         'card4' => 'required',
//         'card5' => 'required',
//         'card6' => 'required',
//         'pointsTaken' => 'required',
//     ]);

//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }

//     $game = new Record;
//     $game->id = $request->id;
//     $game->card1 = $request->card1;
//     $game->card2 = $request->card2;
//     $game->card3 = $request->card3;
//     $game->card4 = $request->card4;
//     $game->card5 = $request->card5;
//     $game->card6 = $request->card6;
//     $game->pointsTaken = $request->pointsTaken;
//     $game->save();

//     return redirect('/');
// });

/**
 * Add New Task
 */
Route::post('/record', function (Request $request) {
    //
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'author' => 'required',
        'album' => 'required',
        'genre' => 'required',
        'time' => 'required',
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

Route::post('/record/{record}', function (Record $record, Request $request) {
	$record = Record::find($request->recordList);
	$record->title = $request->title2;
    $record->author = $request->author2;
    $record->album = $request->album2;
    $record->genre = $request->genre2;
    $record->time = $request->time2;
    $record->save();

    return redirect('/');
});