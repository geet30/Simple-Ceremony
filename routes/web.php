<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\Admin\{AddonsController, PartnerController, MarriagesController, CelebrantsController, AccountController, LocationsController, NotificationsController, EnqueriesController};
use App\Http\Controllers\HomeController;
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


$websiteRoutes = function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('user-login');


    Route::post('search-booking-addon', [HomeController::class, 'searchBookingAddon']);
    // Route::get('add-to-cart',[HomeController::class, 'addToCart'])->name('addToCart');

    Route::get('addons/detail/{id}', [HomeController::class, 'addonDetail'])->name('add-ons-detail');

    Route::post('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

    Route::get('add-ons', [HomeController::class, 'allAddons'])->name('add-ons');
    Route::get('booking', [BookingController::class, 'index'])->name('user.booking');
    Route::get('single-location/{id}', [BookingController::class, 'detail'])->name('user.booking.detail');

    Route::get('location', [BookingController::class, 'index'])->name('user.booking');
    Route::get('get-booking-calender/{locationId}', [BookingController::class, 'getBookingLocationCalender'])->name('booking.getlocationCalender');
    Route::get('add-ons-gallery/{id}/{addonid}', [HomeController::class, 'gallery'])->name('addons.gallery');
    Route::post('/post-booking-location-form', [BookingController::class, 'postBookingLocationForm']);
    Route::post('/post-booking-user-detail', [BookingController::class, 'postBookingLocationUserDetail']);

    Route::post('/post-booking-user-payment', [BookingController::class, 'postBookingLocationPayment']);
    Route::post('search-booking', [BookingController::class, 'searchBooking']);
    Route::post('search-location', [HomeController::class, 'searchLocation']);

    Route::get('payment-success', function () {
        return view('elements.user.booking.booking-step-three');
    });
    Route::get('payment-cancel', function () {
        return view('elements.user.booking.payment-cancel');
    });

    Route::get('request-custom-location', [HomeController::class, 'requestCustomLocation'])->name('request-custom-location');
    Route::post('post-custom-location', [HomeController::class, 'postCustomLocation'])->name('post-custom-location');
    Route::get('book-custom-location', function () {
        return view('pages.book-custom-location');
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
    Route::get('password-reset', function () {
        return view('user.password-reset');
    });
    Route::get('create-password', function () {
        return view('user.create-password');
    });
    Route::middleware('auth')->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('overview', 'App\Http\Controllers\User\UserController@index')->name('user-overview');
            Route::get('add-ons', 'App\Http\Controllers\User\UserController@addons')->name('user-add-ons');
            Route::get('addons/detail/{id}', 'App\Http\Controllers\User\UserController@addonDetail')->name('user-addons-detail');
            Route::get('addons/gallery/{id}/{addonid}', [App\Http\Controllers\User\UserController::class, 'gallery'])->name('user.addons.gallery');
        });



        Route::get('add-ons-gallery', function () {
            return view('user.overview.addons.gallery');
        });
        Route::get('order-add-ons-details', function () {
            return view('user.overview.addons.details');
        });
        Route::get('account-details', function () {
            return view('user.account.account-details');
        });
        Route::get('account-edit', function () {
            return view('user.account.account-edit');
        });

        Route::get('package-gallery', function () {
            return view('user.addons.package-gallery');
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
        // });
    });
};
$adminRoutes = function () {
    Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('admin-login');
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('admin-login');
    Route::middleware('auth')->group(function () {
        Route::resource('marriage-celebrants', CelebrantsController::class);
        Route::resource('account', AccountController::class);
        Route::group(['prefix' => 'account'], function () {
            Route::post('save-tax', [AccountController::class, 'addAdminTax']);
        });
        Route::resource('enquiries', EnqueriesController::class);
        Route::resource('notifications', NotificationsController::class);
        Route::get('all-enquiries/{slug}', [EnqueriesController::class, 'index'])->name('admin.enquiry');
        Route::post('search-enquries', [EnqueriesController::class, 'searchEnquiries']);
        Route::post('change-enquiry-status', [EnqueriesController::class, 'changeStatus']);

        //common function to make user active and inactive
        Route::post('/change-user-status', [CelebrantsController::class, 'changeStatus']);
        Route::post('search-location', [LocationsController::class, 'searchAdminLocation']);
        Route::get('calander-overview', function () {
            return view('admin.calander.calander-overview');
        });

        Route::get('all-triggers-and-emails', function () {
            return view('admin.triggers-and-emails.all-triggers-and-emails');
        });
        Route::get('create-trigger', function () {
            return view('admin.triggers-and-emails.create-trigger');
        });
        Route::get('booking-confirmation', function () {
            return view('admin.triggers-and-emails.booking-confirmation');
        });
        Route::get('edit-booking-confirmation', function () {
            return view('admin.triggers-and-emails.edit-booking-confirmation');
        });

        Route::get('payments-overview', function () {
            return view('admin.payments.payments-overview');
        });

        Route::get('locations/{slug}', 'App\Http\Controllers\Admin\LocationsController@index')->name('locations.all-requests');

        Route::post('store-location', 'App\Http\Controllers\Admin\LocationsController@store')->name('locations.store');

        Route::group(['prefix' => 'location'], function () {
            Route::post('submit-celebrant', 'App\Http\Controllers\Admin\LocationsController@storeCelebrant')->name('submit-celebrant');
            Route::DELETE('delete-celebrant/{id}', 'App\Http\Controllers\Admin\LocationsController@destroyCelebrant')->name('delete-celebrant');
            Route::get('create/{id?}', 'App\Http\Controllers\Admin\LocationsController@create')->name('locations.create');
            Route::get('detail/{id}', 'App\Http\Controllers\Admin\LocationsController@detail')->name('locations.detail');
            Route::get('edit/{id}', 'App\Http\Controllers\Admin\LocationsController@edit')->name('locations.edit');
            Route::post('update/{id}', 'App\Http\Controllers\Admin\LocationsController@update')->name('locations.update');
        });
        Route::group(['prefix' => 'partner'], function () {
            Route::get('/', [PartnerController::class, 'index']);
            Route::get('details/{id}', [PartnerController::class, 'partnerDetail']);
            Route::post('personal-data/{id}', [PartnerController::class, 'personalData'])->name('partner.personal-data');
            Route::get('create', [PartnerController::class, 'create']);
            Route::post('store', [PartnerController::class, 'store'])->name('partner.store');
            Route::get('package/details/{id}', [PartnerController::class, 'packageDetail'])->name('partner.package');
            Route::get('package/gallery/{id}/{addonid}', [PartnerController::class, 'gallery'])->name('admin.package.gallery');
            Route::get('edit/package/{id}', [PartnerController::class, 'edit'])->name('admin.package.edit');
            Route::post('update/{id}', [PartnerController::class, 'update'])->name('partner.update');
        });
        Route::group(['prefix' => 'marriages'], function () {
            Route::get('/', [MarriagesController::class, 'index']);
            Route::post('save-celebrant', [MarriagesController::class, 'saveCelebrant'])->name('save-celebrant');
            Route::get('detail/{id}', [MarriagesController::class, 'detail'])->name('marriage.detail');

        });

        Route::get('create-celebrants-invoice', function () {
            return view('admin.payments.create-celebrants-invoice');
        });
        Route::get('create-partners-invoice', function () {
            return view('admin.payments.create-partners-invoice');
        });
        Route::post('/change-location-status', [LocationsController::class, 'changeStatus']);
        Route::get('locations/view/{id}', [LocationsController::class, 'view'])->name('location.view');

        Route::post('get-packages', [LocationsController::class, 'getPackages']);
        Route::get('addons/{slug}', [AddonsController::class, 'index'])->name('admin.addons');
        /** Addon Setting **/
        Route::post('/submit-addon', [AddonsController::class, 'store']);
        Route::get('addons/destroy/{id}', [AddonsController::class, 'destroy'])->name('addons.destroy');
        Route::post('/update-addon', [AddonsController::class, 'update']);
        /** Addon Setting **/

        /** Location Filter Setting **/
        Route::post('/submit-filter', [LocationsController::class, 'saveFilter']);
        Route::get('filter/destroy/{id}', [LocationsController::class, 'destroyFilter'])->name('filters.destroy');
        Route::post('/update-filter', [LocationsController::class, 'updateFilter']);
        /** Location Filter Setting **/

        Route::post('/search-addon', [AddonsController::class, 'searchAddon']);
        Route::get('addons/detail/{id}', [AddonsController::class, 'detail'])->name('addons.detail');
        Route::get('addons/gallery/{id}/{addonid}', [AddonsController::class, 'gallery'])->name('admin.addons.gallery');

        Route::post('/change-status', [AddonsController::class, 'changeStatus']);
        Route::post('/submit-feedback', [AddonsController::class, 'submitFeedback']);




        Route::get('all-reports', function () {
            return view('admin.financial-report.all-reports');
        });
        Route::get('reports-location', function () {
            return view('admin.financial-report.reports-location');
        });

        Route::get('all-referrers', function () {
            return view('admin.referrers.all-referrers');
        });
        Route::get('create-new-referrers', function () {
            return view('admin.referrers.create-new-referrers');
        });
        Route::get('edit-referrers', function () {
            return view('admin.referrers.edit-referrers');
        });
        Route::get('referrers-details', function () {
            return view('admin.referrers.referrers-details');
        });
        Route::get('pending-referrers-details', function () {
            return view('admin.referrers.pending-referrers-details');
        });

        Route::get('all-enquiries', function () {
            return view('admin.enquiries.all-enquiries');
        });
        Route::get('enquiries-details', function () {
            return view('admin.enquiries.enquiries-details');
        });
        Route::get('create-enquiry', function () {
            return view('admin.enquiries.create-enquiry');
        });
        Route::get('edit-enquiry', function () {
            return view('admin.enquiries.edit-enquiry');
        });
       
        
        Route::get('booked-order-details', function () {
            return view('admin.marriages.booked-order-details');
        });
        Route::group(['prefix' => 'celebrant'], function () {
        });
    });
};
$partnerRoutes = function () {
    Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('partner-login');
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('partner-login');
    Route::get('sign-up', 'App\Http\Controllers\Auth\RegisterController@showSignupForm');
    Route::get('password-reset', function () {
        return view('partner.password-reset');
    });
    Route::middleware('auth')->group(function () {


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
        Route::get('add-ons', [App\Http\Controllers\Partner\AddonsController::class, 'index'])->name('partner-addons');

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
    });
};
$celebrantRoutes = function () {
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

    Route::get('/', function () {
        return view('celebrant.login');
    });
};

Route::group(array('domain' => config('env.PARTNER')), $partnerRoutes);
Route::group(array('domain' => config('env.CELEBRANT')), $celebrantRoutes);
Route::group(array('domain' => config('env.ADMIN')), $adminRoutes);
Route::group(array('domain' => config('env.WEBSITE')), $websiteRoutes);
Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
