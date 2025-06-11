<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\Payment;
use App\Livewire\Newpayment;
use App\Livewire\Draft;
use App\Livewire\Rejected;
use App\Livewire\Approve;
use App\Livewire\Suppliers;
use App\Livewire\Budget;
use App\Livewire\Chart;
use App\Livewire\URA;
use App\Livewire\Category;
use App\Livewire\Audit;
use App\Livewire\Exchange;
use App\Livewire\Nature;
use App\Livewire\Users;
use App\Livewire\Rights;
use App\Livewire\Role;
use App\Livewire\Approval;
use App\Livewire\Pending;
use App\Livewire\General;
use App\Livewire\Fixed;
use App\Livewire\Leasing;
use App\Livewire\Mortage;
use App\Livewire\Project;
use App\Livewire\Donations;
use App\Livewire\Appointments;
use App\Livewire\Dividend;
use App\Livewire\StorePayment;
use App\Livewire\VatGoods;
use App\Livewire\VatServices;
use App\Livewire\TaxGoods;
use App\Livewire\Reversal;
use App\Livewire\Staff;
use App\Livewire\Staffpayment;
use App\Livewire\Gl;
use App\Livewire\Kisasi;
use App\Livewire\Division;
use App\Livewire\Auth\AdminLogin;
use App\Livewire\Auth\Login;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\Locate;
use App\Livewire\Admin\Current;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Payment
Route::get('payment', Payment::class)->name('payment');

//NewPayment
Route::get('newpayment', Newpayment::class)->name('newpayment');

//Reject
Route::get('rejected', Rejected::class)->name('rejected');

//division
Route::get('division', Division::class)->name('division');
//Draft
Route::get('draft', Draft::class)->name('draft');

//Draft
Route::get('pending', Pending::class)->name('pending');

//Approved
Route::get('approve', Approve::class)->name('approve');

//Suppliers
Route::get('suppliers', Suppliers::class)->name('suppliers');

//Budget
Route::get('budget', Budget::class)->name('budget');

//Chart
Route::get('chart', Chart::class)->name('chart');

//URA
Route::get('u-r-a', URA::class)->name('u-r-a');

//Category
Route::get('category', Category::class)->name('category');

//Audit
Route::get('audit', Audit::class)->name('audit');

//Exchange
Route::get('exchange', Exchange::class)->name('exchange');

//Nature
Route::get('nature', Nature::class)->name('nature');

//Users
Route::get('users', Users::class)->name('users');

//Rights
Route::get('rights', Rights::class)->name('rights');

//Role
Route::get('role', Role::class)->name('role');

//Approval
Route::get('approval', Approval::class)->name('approval');


//General
Route::get('general', General::class)->name('general');


//Fixed
Route::get('fixed',Fixed::class)->name('fixed');


//Leasing
Route::get('leasing', Leasing::class)->name('leasing');


//Mortage
Route::get('mortage', Mortage::class)->name('mortage');


//Project
Route::get('project', Project::class)->name('project');


//Donations
Route::get('donations', Donations::class)->name('donations');


//Appointments
Route::get('appointments', Appointments::class)->name('appointments');


//Dividend
Route::get('dividend', Dividend::class)->name('dividend');


//storepayment
Route::get('store-payment', StorePayment::class)->name('store-payment');


//staff
Route::get('staff', Staff::class)->name('staff');


//Gl
Route::get('gl', Gl::class)->name('gl');


//staffpayment
Route::get('staffpayment', Staffpayment::class)->name('staffpayment');


//TaxGoods
Route::get('tax-goods', TaxGoods::class)->name('tax-goods');


//VatGoods
Route::get('vat-goods', VatGoods::class)->name('vat-goods');


//vatservices
Route::get('vat-services', VatServices::class)->name('vat-services');


//Reversal
Route::get('reversal', Reversal::class)->name('reversal');

//kisasi
Route::get('kisasi', Kisasi::class)->name('kisasi');

//Admin



Route::get('/login', Login::class)
    ->middleware('guest')
    ->name('login');

Route::get('/admin/login', AdminLogin::class)
    ->middleware('guest:admin')
    ->name('admin.login');

Route::get('/dashboard', Dashboard::class)
    ->middleware('auth')
    ->name('dashboard');

Route::prefix('admin')->name('admin.')
->middleware('auth:admin')->group(function () { // Added middleware here
    // Route for Location/Division Management
    Route::get('/locate', Locate::class)->name('locate');
    Route::get('/current', Current::class)->name('current'); // Use LocationManagement
});

Route::get('/admin/dashboard', AdminDashboard::class)
    ->middleware('auth:admin')
    ->name('admin.dashboard');

Route::post('/logout', function () {
    if (auth()->guard('admin')->check()) {
        auth()->guard('admin')->logout();
    } else {
        auth()->guard('web')->logout();
    }

    session()->invalidate();
    session()->regenerateToken();

    return redirect('/');
})->name('logout');



//user
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
