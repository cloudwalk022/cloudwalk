<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ChatbotController;
 

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
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend/index');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

// Service Section Route //

Route::get('/frontend/Services/webdevelopment', [HomeController::class, 'webdevelopment'])->name('webdevelopment');

Route::get('/frontend/Services/customsoftware', [HomeController::class, 'customsoftware'])->name('customsoftware');

Route::get('/frontend/Services/MobileApps', [HomeController::class, 'MobileApps'])->name('MobileApps');

Route::get('/frontend/Services/websitehosting', [HomeController::class, 'websitehosting'])->name('websitehosting');
Route::get('/frontend/Services/graphicdesigning', [HomeController::class, 'graphicdesigning'])->name('graphicdesigning');
Route::get('/frontend/Services/computerhardware', [HomeController::class, 'computerhardware'])->name('computerhardware');
Route::get('/frontend/Services/itconsulting', [HomeController::class, 'itconsulting'])->name('itconsulting');
Route::get('/frontend/Services/digitalmarketing', [HomeController::class, 'digitalmarketing'])->name('digitalmarketing');
Route::get('/frontend/Services/cybersecurityservice', [HomeController::class, 'cybersecurityservice'])->name('cybersecurityservice');
Route::get('/frontend/Services/printingservice', [HomeController::class, 'printingservice'])->name('printingservice');
Route::get('/frontend/Services/uiuxdesigning', [HomeController::class, 'uiuxdesigning'])->name('uiuxdesigning');


// Industry Section route //

Route::get('/frontend/industry/healthcare', [HomeController::class, 'healthcare'])->name('healthcare');
Route::get('/frontend/industry/realestate', [HomeController::class, 'realestate'])->name('realestate');
Route::get('/frontend/industry/hotel_hospitality', [HomeController::class, 'hotel_hospitality'])->name('hotel_hospitality');
Route::get('/frontend/industry/education', [HomeController::class, 'education'])->name('education');
Route::get('/frontend/industry/finance_fintech', [HomeController::class, 'finance_fintech'])->name('finance_fintech');
Route::get('/frontend/industry/retail', [HomeController::class, 'retail'])->name('retail');
Route::get('/frontend/industry/agriculture', [HomeController::class, 'agriculture'])->name('agriculture');

// About Us Section Route //

Route::get('/frontend/about_us/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/frontend/about_us/teammember', [HomeController::class, 'teammember'])->name('teammember');
Route::get('/frontend/about_us/carrers', [HomeController::class, 'carrers'])->name('carrers');


// Current Projects Section Route //

Route::get('/frontend/current_project/projects', [HomeController::class, 'projects'])->name('projects');


// Appointment Route section
Route::get('/appointments', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');



// Contact Page Route Section

// Route::get('/contact_us', [ContactController::class, 'showForm'])->name('contact_us.show');
// Route::post('/contact_us', [ContactController::class, 'submitForm'])->name('contact_us.submit');

Route::get('/frontend/about_us/Contactus', [HomeController::class, 'Contactus'])->name('Contactus');
 


Route::post('/chatbot/message', [ChatbotController::class, 'getResponse'])->name('chatbot.message');

