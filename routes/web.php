<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addData', function(){
    $img_list = ["/pic1", '/pic2'];
    $path_list = ["/path1", "path2"];
    // return $img[0];



    DB::table('resources')->insert([
        'list_img_path' =>  json_encode($img_list),
        'list_file_path'=> json_encode($path_list),
        // 'time_send' => Carbon::now('Asia/Ho_Chi_Minh'),
        // 'port' => '22',
        // 'databaseName' => '...',


    ]);



    DB::table('email')->insert([
        'subject' => 'test1',
        'content'=> 'bao cao chi tiet tua',
        'resources_id' => 'vu',
        'time_send' => Carbon::now('Asia/Ho_Chi_Minh'),
        // 'port' => '22',
        // 'databaseName' => '...',


    ]);

    DB::table('list_email')->insert([
        'user_id' => '1',   
        'time_send'=> Carbon::now('Asia/Ho_Chi_Minh'),
        'time_read' =>  Carbon::now('Asia/Ho_Chi_Minh'),
        'mail_id' => '1',
        'role' => 'user_send',
        'user_send'=> 'vu@gmail.com',
        'user_recv' => 'vu@gmail.com',      
        'user_cc'=> ' vu    ',
        'user_recv_cc'=> ' vu  recv',


        // 'port' => '22',
        // 'databaseName' => '...',


    ]);


});