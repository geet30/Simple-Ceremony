<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AddonsController;

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


$websiteRoutes = function() {
    Route::get('/', function () {
        return view('pages.home');
    });
    Route::get('location', function () {
        return view('pages.location');
    });
    Route::get('single-location', function () {
        return view('pages.single-location');
    });
    Route::get('request-custom-location', function () {
        return view('pages.request-custom-location');
    });
    Route::get('book-custom-location', function () {
        return view('pages.book-custom-location');
    });
    Route::get('book-your-location', function () {
        return view('pages.book-your-location');
    });
    Route::get('voucher', function () {
        return view('pages.voucher');
    });
    Route::get('voucher-details', function () {
        return view('pages.voucher-details');
    });
    Route::get('contact-us', function () {
        return view('pages.contact-us');
    });
    Route::get('how-it-works', function () {
        return view('pages.how-it-works');
    });
    Route::get('team', function () {
        return view('pages.team');
    });
    Route::get('team-detail', function () {
        return view('pages.team-detail');
    });
    Route::get('faq', function () {
        return view('pages.faq');
    });
    Route::get('married-checklist', function () {
        return view('pages.married-checklist');
    });
    Route::get('add-ons', function () {
        return view('pages.add-ons');
    });
    Route::get('why-sc', function () {
        return view('pages.why-sc');
    });
    Route::get('your-ceremony', function () {
        return view('pages.your-ceremony');
    });
    Route::get('sample-ceremony', function () {
        return view('pages.sample-ceremony');
    });
    Route::get('marriage-certificate', function () {
        return view('pages.marriage-certificate');
    });
    Route::get('complete-paperwork', function () {
        return view('pages.complete-paperwork');
    });
    Route::get('add-ons-detail', function () {
        return view('pages.add-ons-detail');
    });
    Route::get('add-ons-gallery', function () {
        return view('pages.add-ons-gallery');
    });
    Route::get('term-and-condition', function () {
        return view('pages.term-and-condition');
    });
    Route::get('authorised-person', function () {
        return view('pages.authorised-person');
    });
    Route::get('current-restrictions', function () {
        return view('pages.current-restrictions');
    });
    Route::get('shortening-of-time', function () {
        return view('pages.shortening-of-time');
    });
    Route::get('reschedule-correction', function () {
        return view('pages.reschedule-correction');
    });
    Route::get('advice-after-first-year', function () {
        return view('pages.advice-after-first-year');
    });
    Route::get('quiz', function () {
        return view('pages.quiz');
    });

    // Route::group(['prefix' => 'user'], function () {
    //     Route::get('index', function () {
    //         return view('user.index');
    //     });
    // });
    Route::get('login', function () {
        return view('user.login');
    });
    Route::group(['prefix' => 'user'], function () {
      
        Route::get('password-reset', function () {
            return view('user.password-reset');
        });
        Route::get('create-password', function () {
            return view('user.create-password');
        });
        Route::get('index', function () {
            return view('user.overview.index');
        });
        Route::get('order-add-ons', function () {
            return view('user.overview.order-add-ons');
        });
        Route::get('add-ons-gallery', function () {
            return view('user.overview.add-ons-gallery');
        });
        Route::get('account-details', function () {
            return view('user.account.account-details');
        });
        Route::get('account-edit', function () {
            return view('user.account.account-edit');
        });
        Route::get('add-ons', function () {
            return view('user.add-ons.add-ons');
        });
        Route::get('package-details', function () {
            return view('user.add-ons.package-details');
        });
        Route::get('package-gallery', function () {
            return view('user.add-ons.package-gallery');
        });
        Route::get('all-invoices', function () {
            return view('user.invoices.all-invoices');
        });
        Route::get('notes', function () {
            return view('user.notes.lisiting');
        });
        Route::get('lisiting-to-do', function () {
            return view('user.notes.lisiting-to-do');
        });
        Route::get('create', function () {
            return view('user.notes.create');
        });
        Route::get('edit', function () {
            return view('user.notes.edit');
        });
        Route::get('detail', function () {
            return view('user.notes.detail');
        });
        Route::get('list', function () {
            return view('user.list.lisiting-empty');
        });
        Route::get('lisiting', function () {
            return view('user.list.lisiting');
        });
        Route::get('activity-history', function () {
            return view('user.activity-history.lisiting');
        });
        Route::get('documents', function () {
            return view('user.documents.lisiting');
        });
        Route::get('signature', function () {
            return view('user.documents.signature');
        });
        Route::get('edit-signature', function () {
            return view('user.documents.edit-signature');
        });
        Route::get('NoIM', function () {
            return view('user.NoIM.view');
        });
        Route::get('steps', function () {
            return view('user.NoIM.steps');
        });
        Route::get('step-2', function () {
            return view('user.NoIM.step-2');
        });
    });
};
$adminRoutes = function() {
    
    Route::get('/', function () {
        return view('admin.login');
    });
    Route::get('locations', function () {
        return view('admin.locations.listing');
    });
    Route::get('single', function () {
        return view('admin.locations.single');
    });
    Route::get('create', function () {
        return view('admin.locations.create');
    });
    Route::get('edit', function () {
        return view('admin.locations.edit');
    });
    Route::get('view', function () {
        return view('admin.locations.view');
    });

    Route::get('add-ons',[AddonsController::class, 'index'])->name('admin.addons');
    Route::post('/submit-addon',[AddonsController::class, 'store']);
    Route::get('addons/destroy/{id}', [AddonsController::class, 'destroy'])->name('admin.addons.destroy');
    Route::post('/update-addon',[AddonsController::class, 'update']);
    Route::post('/search-addon',[AddonsController::class, 'searchAddon']);

   
    Route::get('admin-add-ons-details', function () {
        return view('admin.admin-add-ons-details');
    });
    
    Route::get('all-partners', function () {
        return view('admin.partner.all-partners');
    });
    Route::get('add-new-partner', function (){
        return view('admin.partner.add-new-partner');
    });
    Route::get('edit-package', function () {
        return view('admin.partner.edit-package');
    });
    Route::get('partner-details', function () {
        return view('admin.partner.partner-details');
    });
    Route::get('sign-up', function () {
        return view('admin.sign-up');
    });
    Route::get('password-reset', function () {
        return view('admin.password-reset');
    });
    Route::group(['prefix' => 'admin'], function () {
        // Route::resource('locations', App\Http\Controllers\LocationsController::class);
        // Route::get('location', function () {
        //     return view('admin.location');
        // })->name('admin-locations');
      
    });

};


$partnerRoutes = function() {
    Route::get('/', function () {
        return view('partner.login');
    });
    Route::get('password-reset', function () {
        return view('partner.password-reset');
    });
    Route::get('sign-up', function () {
        return view('partner.sign-up');
    });
    Route::get('all-partners', function () {
        return view('partner.all-partners');
    });
    Route::get('account-details', function () {
        return view('user.account.account-details');
    });
    Route::get('add-new-partner', function () {
        return view('partner.add-new-partner');

    });
    Route::get('edit-package', function () {
        return view('partner.edit-package');
    });
    Route::get('partner-details', function () {
        return view('partner.partner-details');
    });
    Route::get('add-ons', function () {
        return view('partner.add-ons');
    });
    Route::get('add-new-package', function () {
        return view('partner.add-new-package');
    });
    Route::get('package-details', function () {
        return view('partner.package-details');
    });
    Route::get('package-gallery', function () {
        return view('partner.package-gallery');
    });
    Route::get('all-upcoming', function () {
        return view('partner.upcoming.all-upcoming');
    });
    Route::get('order-details', function () {
        return view('partner.upcoming.order-details');
    });
    Route::get('order-add-ons', function () {
        return view('partner.upcoming.order-add-ons');
    });
    Route::get('all-invoices', function () {
        return view('partner.invoices.all-invoices');
    });
    Route::get('create-tax-invoice', function () {
        return view('partner.invoices.create-tax-invoice');
    });
    Route::get('create-notes', function () {
        return view('partner.notes.create-notes');
    });
    Route::get('all-notes', function () {
        return view('partner.notes.all-notes');
    });
    Route::get('all-reports', function () {
        return view('partner.financial-report.all-reports');
    });
    Route::get('reports-location', function () {
        return view('partner.financial-report.reports-location');
    });
    Route::get('account-details', function () {
        return view('partner.account.account-details');
    });
    Route::get('account-edit', function () {
        return view('partner.account.account-edit');
    });
    Route::get('overview', function () {
        return view('partner.calendar.overview');
    });
    Route::group(['prefix' => 'partner'], function () {
  
      
    });
};
$celebrantRoutes = function() {
    Route::get('upcomming', function () {
        return view('celebrant.upcomming.listing');
    });
    Route::get('availablity-overview', function () {
        return view('celebrant.upcomming.availablity-overview');
    });
    Route::get('locations', function () {
        return view('celebrant.locations.listing');
    });
    Route::get('availablity-upcoming-docs', function () {
        return view('celebrant.upcomming.availablity-upcoming-docs');
    });
    Route::get('add', function () {
        return view('celebrant.locations.add');
    });
    Route::get('open', function () {
        return view('celebrant.locations.open');
    });
    Route::get('edit', function () {
        return view('celebrant.locations.edit');
    });
    Route::get('total-fee', function () {
        return view('celebrant.total-fee.listing');
    });
    Route::get('invoices', function () {
        return view('celebrant.invoices.listing');
    });
    Route::get('create', function () {
        return view('celebrant.invoices.create');
    });
    Route::get('financial-report', function () {
        return view('celebrant.financial-report.listing');
    });
    Route::get('location', function () {
        return view('celebrant.financial-report.location');
    });
    Route::get('calendar', function () {
        return view('celebrant.calendar.availability');
    });
    Route::get('add', function () {
        return view('celebrant.calendar.add');
    });
    Route::get('profile', function () {
        return view('celebrant.profile.setting');
    });
    Route::get('edit', function () {
        return view('celebrant.profile.edit');
    });
   
    Route::get('password-reset', function () {
        return view('celebrant.password-reset');
    });
    Route::get('sign-up', function () {
        return view('celebrant.sign-up');
    });
    Route::group(['prefix' => 'celebrant'], function () {
     
       
    });
    Route::get('/', function () {
        return view('celebrant.login');
    });
};

Route::group(array('domain' => env('PARTNER')), $partnerRoutes);
Route::group(array('domain' => env('CELEBRANT')), $celebrantRoutes);
Route::group(array('domain' => env('ADMIN')), $adminRoutes);
Route::group(array('domain' => env('WEBSITE')), $websiteRoutes);
Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
