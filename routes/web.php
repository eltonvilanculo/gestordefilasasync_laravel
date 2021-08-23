<?php

use App\Jobs\MailClassExample as JobsMailClassExample;
use App\Mail\MailClassExample;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send', function(){

    $user = new stdClass();
    $user->name = 'Elton Vilanculo' ;
    $user->email = 'eltonvillas10@gmail.com';
    // return new MailClassExample($user);

    // Test with simple queue : Mail::queue(new MailClassExample($user)) ;

    // Quando temos job, chamos a classe job

    // new JobsMailClassExample::dispatch($user)->delay(now()->addSeconds('2'));



    $job = new JobsMailClassExample($user);

    dispatch($job)->delay(now()->addSeconds('2'));


});
