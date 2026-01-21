<?php

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
    return view('welcome');
});

Route::get('/', function () {
return view('home');
})->name('home');


Route::get('/about', function () {
$name = 'Earl Angelo D. Salapang'; // Replace with YOUR name
$course = 'Bachelor of Science in Information Technology';
$university = 'Central Mindanao University'; // Replace with YOUR university
return view('about', [
'name' => $name,
'course' => $course,
'university' => $university
]);
})->name('about');

Route::get('/projects', function () {
$projects = [
['title' => 'ZenModeApp', 'description' => 'My first Application project'],
['title' => 'OnlineVotingSystem', 'description' => 'A web online voting system created for our final project as our final project in WebSystem2'],
['title' => 'Attendance and Sanction System', 'description' => 'A web system created as our final project for our HCI'],
];
return view('projects', ['projects' => $projects]);
})->name('projects');

Route::get('/contact', function () {
$email = 's.salapang.earlangelo@cmu.edu.ph'; // Replace with YOUR email
$phone = '+63 960 900 9198'; // Replace with YOUR phone

return view('contact', [
'email' => $email,
'phone' => $phone
]);
})->name('contact');