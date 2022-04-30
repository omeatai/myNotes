<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Mail;

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
//     return view('welcome');
// });

#Route::get('/sms', [RegistrationController::class, 'sms_test'])->name('sms_test');


//TO HOME PAGE
Route::get('/', [RegistrationController::class, 'home'])->name('home');

########################### REGISTRATION #########################
##################################################################
##################################################################
##################################################################

//FOR REGISTRATION
Route::get('/registration', [RegistrationController::class, 'registration1_index'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'registration1_post'])->name('registration');
Route::get('/registration2', [RegistrationController::class, 'registration2_index'])->name('registration2');
Route::post('/registration2', [RegistrationController::class, 'registration2_post'])->name('registration2');
Route::get('/registration3', [RegistrationController::class, 'registration3_index'])->name('registration3');
Route::post('/registration3', [RegistrationController::class, 'registration3_post'])->name('registration3');
Route::get('/registration4', [RegistrationController::class, 'registration4_index'])->name('registration4');
Route::post('/registration4', [RegistrationController::class, 'registration4_post'])->name('registration4');
Route::get('/registration5', [RegistrationController::class, 'registration5_index'])->name('registration5');
Route::post('/registration5', [RegistrationController::class, 'registration5_post'])->name('registration5');
Route::get('/registration6', [RegistrationController::class, 'registration6_index'])->name('registration6');
Route::post('/registration6', [RegistrationController::class, 'registration6_post'])->name('registration6');
Route::get('/success', [RegistrationController::class, 'success_index'])->name('success');


########################### MEMBERSHIP PANEL #####################
##################################################################
##################################################################
##################################################################

//FOR MEMBERSHIP PANEL
Route::get('/membership', [RegistrationController::class, 'membership_index'])->name('membership');
Route::post('/membership', [RegistrationController::class, 'membership_post'])->name('membership');
Route::get('/dashboard', 'RegistrationController@dashboard_index')->name('dashboard');
Route::get('/changeinfo', 'RegistrationController@changeinfo_index')->name('changeinfo');
Route::post('/changeinfo', 'RegistrationController@changeinfo_post')->name('changeinfo');
Route::get('/changephoto', 'RegistrationController@changephoto_index')->name('changephoto');
Route::post('/changephoto', 'RegistrationController@changephoto_post')->name('changephoto');
Route::get('/contactadmin', 'RegistrationController@contactadmin_index')->name('contactadmin');
Route::get('/logout', 'RegistrationController@logout')->name('logout');


########################### ADMIN ################################
##################################################################
##################################################################
##################################################################

//FOR ADMIN PANEL
Route::get('/login', 'RegistrationController@login')->name('login');
Route::post('/login', 'RegistrationController@login_post')->name('login');
Route::get('/secretariat', 'RegistrationController@secretariat')->name('secretariat');

//PROVINCES
Route::get('/abuja_province', 'RegistrationController@abuja_province')->name('abuja_province');
Route::get('/of_the_niger_province', 'RegistrationController@of_the_niger_province')->name('of_the_niger_province');
Route::get('/niger_delta_province', 'RegistrationController@niger_delta_province')->name('niger_delta_province');
Route::get('/ibadan_province', 'RegistrationController@ibadan_province')->name('ibadan_province');
Route::get('/ondo_province', 'RegistrationController@ondo_province')->name('ondo_province');
Route::get('/kaduna_province', 'RegistrationController@kaduna_province')->name('kaduna_province');
Route::get('/owerri_province', 'RegistrationController@owerri_province')->name('owerri_province');
Route::get('/bendel_province', 'RegistrationController@bendel_province')->name('bendel_province');
Route::get('/enugu_province', 'RegistrationController@enugu_province')->name('enugu_province');
Route::get('/aba_province', 'RegistrationController@aba_province')->name('aba_province');
Route::get('/kwara_province', 'RegistrationController@kwara_province')->name('kwara_province');
Route::get('/jos_province', 'RegistrationController@jos_province')->name('jos_province');
Route::get('/lagos_province', 'RegistrationController@lagos_province')->name('lagos_province');
Route::get('/lokoja_province', 'RegistrationController@lokoja_province')->name('lokoja_province');
Route::get('/institutions', 'RegistrationController@institutions')->name('institutions');
Route::get('/cana', 'RegistrationController@cana')->name('cana');
Route::get('/visitors', 'RegistrationController@visitors')->name('visitors');

//ARCHDEACONRY
Route::get('/abuja_archdeaconries', 'RegistrationController@abuja_archdeaconries')->name('abuja_archdeaconries');


########################### SEARCH ###############################
##################################################################
##################################################################
##################################################################

//TO SEARCH/VIEW ALL
Route::get('/search', 'RegistrationController@search')->name('search');

//TO SEARCH/VIEW BY OPTIONS
Route::get('/search_by_option', 'RegistrationController@search_by_option')->name('search_by_option');
Route::post('/search_by_option', 'RegistrationController@search_by_option_post')->name('search_by_option');


########################### EDIT #################################
##################################################################
##################################################################
##################################################################

//TO CHANGE INFO
Route::get('/edit_changeinfo_intro', 'RegistrationController@edit_changeinfo_intro')->name('edit_changeinfo_intro');
Route::post('/post_changeinfo_intro', 'RegistrationController@post_changeinfo_intro')->name('post_changeinfo_intro');
Route::get('/edit_changeinfo', 'RegistrationController@edit_changeinfo')->name('edit_changeinfo');
Route::post('/post_changeinfo', 'RegistrationController@post_changeinfo')->name('post_changeinfo');

//TO CHANGE PHOTO
Route::get('/edit_changephoto', 'RegistrationController@edit_changephoto')->name('edit_changephoto');
Route::post('/post_changephoto', 'RegistrationController@post_changephoto')->name('post_changephoto');

//TO CHANGE COMMITTEE
Route::get('/edit_changecommittee', 'RegistrationController@edit_changecommittee')->name('edit_changecommittee');
Route::post('/post_changecommittee', 'RegistrationController@post_changecommittee')->name('post_changecommittee');

//NEW REGISTRATION
Route::get('/edit_new_registration', 'RegistrationController@edit_new_registration')->name('edit_new_registration');
Route::post('/post_new_registration', 'RegistrationController@post_new_registration')->name('post_new_registration');

//SEND TO POOL
Route::get('/edit_send_to_pool', 'RegistrationController@edit_send_to_pool')->name('edit_send_to_pool');
Route::post('/post_send_to_pool', 'RegistrationController@post_send_to_pool')->name('post_send_to_pool');


########################### PRINT ################################
##################################################################
##################################################################
##################################################################

//TO PRINT BY OPTION
Route::get('/print_by_option', 'RegistrationController@print_by_option')->name('print_by_option');

//TO PRINT ID
Route::post('/print_by_id', 'RegistrationController@print_by_id')->name('print_by_id');

//TO CONFIRM PRINT
Route::post('/confirm_print', 'RegistrationController@confirm_print')->name('confirm_print');

//TO RESET PRINT
Route::post('/reset_print', 'RegistrationController@reset_print')->name('reset_print');

//TO PRINT PIN
Route::post('/print_by_pin', 'RegistrationController@print_by_pin')->name('print_by_pin');

//TO PRINT PROVINCE
Route::post('/print_by_province', 'RegistrationController@print_by_province')->name('print_by_province');

//TO PRINT DIOCESE
Route::post('/print_by_diocese', 'RegistrationController@print_by_diocese')->name('print_by_diocese');

//TO PRINT CHURCH
Route::post('/print_by_church', 'RegistrationController@print_by_church')->name('print_by_church');

//TO PRINT DESIGNATION
Route::post('/print_by_designation', 'RegistrationController@print_by_designation')->name('print_by_designation');

//TO PRINT COMMITTEE
Route::post('/print_by_committee', 'RegistrationController@print_by_committee')->name('print_by_committee');

//TO UNPRINT BY OPTION
Route::get('/unprint_by_option', 'RegistrationController@unprint_by_option')->name('unprint_by_option');

//TO UNPRINT DIOCESE
Route::post('/unprint_by_diocese', 'RegistrationController@unprint_by_diocese')->name('unprint_by_diocese');

//TO UNPRINT CHURCH
Route::post('/unprint_by_church', 'RegistrationController@unprint_by_church')->name('unprint_by_church');

//TO PRINT FROM POOL
Route::get('/print_from_pool', 'RegistrationController@print_from_pool')->name('print_from_pool');
Route::post('/print_from_pool2', 'RegistrationController@print_from_pool2')->name('print_from_pool2');

//TO CONFIRM PRINT POOL
Route::post('/confirm_print_pool', 'RegistrationController@confirm_print_pool')->name('confirm_print_pool');

//TO RESET PRINT POOL
Route::post('/reset_print_pool', 'RegistrationController@reset_print_pool')->name('reset_print_pool');

//TO PRINT FROM WAITING
Route::get('/print_from_waiting', 'RegistrationController@print_from_waiting')->name('print_from_waiting');
Route::post('/print_from_waiting2', 'RegistrationController@print_from_waiting2')->name('print_from_waiting2');

//TO CONFIRM PRINT WAITING
Route::post('/confirm_print_waiting', 'RegistrationController@confirm_print_waiting')->name('confirm_print_waiting');

//TO RESET PRINT WAITING
Route::post('/reset_print_waiting', 'RegistrationController@reset_print_waiting')->name('reset_print_waiting');

//TO PRINT FROM PENDING
Route::get('/print_from_pending', 'RegistrationController@print_from_pending')->name('print_from_pending');
Route::post('/print_from_pending2', 'RegistrationController@print_from_pending2')->name('print_from_pending2');

//TO CONFIRM PRINT PENDING
Route::post('/confirm_print_pending', 'RegistrationController@confirm_print_pending')->name('confirm_print_pending');

//TO RESET PRINT PENDING
Route::post('/reset_print_pending', 'RegistrationController@reset_print_pending')->name('reset_print_pending');

//TO PRINT FROM NOT-PRINTED
Route::get('/print_from_notprinted', 'RegistrationController@print_from_notprinted')->name('print_from_notprinted');
Route::post('/print_from_notprinted2', 'RegistrationController@print_from_notprinted2')->name('print_from_notprinted2');

//TO CONFIRM PRINT NOT-PRINTED
Route::post('/confirm_print_notprinted', 'RegistrationController@confirm_print_notprinted')->name('confirm_print_notprinted');

//TO RESET PRINT NOT-PRINTED
Route::post('/reset_print_notprinted', 'RegistrationController@reset_print_notprinted')->name('reset_print_notprinted');





