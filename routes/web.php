<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\{BookingController, UserListToDoController,UserNoimController, UserController,DashboardController as UserDashboard};
use App\Http\Controllers\Admin\{AddonsController, PartnerController, MarriagesController, CelebrantsController, AccountController, LocationsController, NotificationsController, EnqueriesController, CalanderController, InvoicesController,FinancialReportController,CeremoniesTypeController,GiftVouchersController};
use App\Http\Controllers\{HomeController, DownloadController,TwilioSMSController};
use App\Http\Controllers\Celebrants\{DashboardController, LocationsController as CelebrantLocations, InvoicesController as CelebrantInvoices, CalendarController,CertificateRegisterController};

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
    Route::get('sendSMS', [TwilioSMSController::class, 'index']);
    Route::get('e-signature', function () {
        return view('user.sample.e-signature');
    });
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('user-login');
    Route::post('/checkemail', [HomeController::class, 'checkIfMailExist']);
    Route::post('/validateCoupon', [HomeController::class, 'checkIfCouponValid']);


    Route::get('search-booking-addon', [HomeController::class, 'searchBookingAddon']);
    Route::post('search-addon-with-location', [HomeController::class, 'searchAddonWithLocation']);
    
    // Route::get('add-to-cart',[HomeController::class, 'addToCart'])->name('addToCart');

    Route::get('addons/detail/{id}', [HomeController::class, 'addonDetail'])->name('add-ons-detail');

    Route::post('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

    Route::get('add-ons', [HomeController::class, 'allAddons'])->name('add-ons');
    Route::get('booking', [BookingController::class, 'index'])->name('user.booking');
    Route::get('single-location/{id}', [BookingController::class, 'detail'])->name('user.booking.detail');

    Route::get('location', [BookingController::class, 'index'])->name('user.booking');
    Route::get('get-booking-calender/{locationId}/{date?}', [BookingController::class, 'getBookingLocationCalender'])->name('booking.getlocationCalender');
    Route::get('add-ons-gallery/{id}/{addonid}', [HomeController::class, 'gallery'])->name('addons.gallery');
    Route::post('/post-booking-location-form', [BookingController::class, 'postBookingLocationForm']);
    Route::post('/post-booking-user-detail', [BookingController::class, 'postBookingLocationUserDetail']);

    Route::post('/post-booking-user-payment', [BookingController::class, 'postBookingLocationPayment']);
    Route::post('search-booking', [BookingController::class, 'searchBooking']);
    Route::get('get-celebrant-availability', [BookingController::class, 'getCelebrantAvailability']);
    Route::get('get-booking-ceremony-type', [BookingController::class, 'getBookingCeremonyType']);
    
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
   
    Route::post('post-quiz', [HomeController::class, 'quiz'])->name('user.quiz');
    Route::get('create-password', function () {
        return view('auth.passwords.create-password');
    });
    Route::post('user-create-password', [UserController::class, 'userCreatePassword'])->name('user.create.password');
    
    Route::middleware('auth')->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('overview{id?}', [UserController::class, 'index'])->name('user-overview');
            Route::get('add-ons',  [UserController::class, 'addons'])->name('user-add-ons');
            Route::get('overview/location/{id}', [UserController::class, 'locationDetail'])->name('user-location');
            Route::get('add-ons/detail/{id}', [UserController::class, 'addonDetail'])->name('user-addons-detail');
            Route::get('package/detail/{id}', [UserController::class, 'packageDetail'])->name('package-detail');
            Route::get('add-ons/gallery/{id}/{addonid}', [UserController::class, 'gallery'])->name('user.addons.gallery');
            Route::get('package/gallery/{id}/{addonid}', [UserController::class, 'gallery'])->name('user.addons.gallery');
            Route::get('documents', [UserNoimController::class, 'documents'])->name('userNoim.documents.get');
            Route::get('preview-document/{page}/{id?}/{bookingId?}', [UserNoimController::class, 'previewDocument'])->name('userNoim.preview-document');
            Route::post('delete-document-signature', [UserNoimController::class, 'deleteDocumentSignature'])->name('userNoim.delete-document-signature');
            Route::post('documents', [UserNoimController::class, 'documentSave'])->name('userNoim.documents.post');
            Route::post('document-signature', [UserNoimController::class, 'saveSignature'])->name('userNoim.documents.signature');

            Route::get('NoIM', function () {
                return view('user.NoIM.view');
            });
            
            Route::resource('list-to-do', UserListToDoController::class); 
            Route::post('/list-to-do-update/{id}', [UserListToDoController::class, 'update'])->name('list-to-do.update');  
            Route::get('list-to-do/destroy/{id}', [UserListToDoController::class, 'destroy'])->name('list-to-do.destroy');        

            Route::resource('user-noim', UserNoimController::class);
            Route::get('steps', [UserNoimController::class, 'steps'])->name('user-noim.steps');
            Route::get('step-2', [UserNoimController::class, 'step2'])->name('user-noim.steps2.get');
            Route::post('step-2', [UserNoimController::class, 'referrer'])->name('user-noim.steps2.post');
            Route::get('profile', [AccountController::class, 'getUserAccount'])->name('getUserAccount');
            Route::post('account', [AccountController::class, 'updateUserAccount']);
            Route::put('account/update', [AccountController::class, 'updateUserAccount'])->name('updateUserAccount');
            Route::get('overview/invitation', [UserController::class, 'getInvitation'])->name('getInvitation');
           
            Route::get('getPay{id?}', [UserController::class, 'getPay'])->name('user.pay');
            Route::post('postPay', [UserController::class, 'postPay'])->name('user.payment');
            Route::get('reschedule-info', [UserController::class, 'getRescheduleInfo']);
            Route::post('reschedule-pay', [UserController::class, 'getReschedulePay'])->name('reschedule.pay');
            Route::post('reschedulePay', [UserController::class, 'reschedulePay'])->name('reschedule.payment');
            Route::get('invoices', [UserDashboard::class, 'invoices']);
            Route::get('download-user-invoice/{bookingid}/{packageid}', [UserDashboard::class, 'downloadUserInvoices'])->name('downloadUserInvoices');
        });
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


    Route::get('communication', function () {
        return view('user.communication.listing');
    });

    Route::get('signature', function () {
        return view('user.documents.signature');
    });
    Route::get('edit-signature', function () {
        return view('user.documents.edit-signature');
    });

    Route::get('routes', function () {
        $routeCollection = Route::getRoutes();
        $title = "Route List";
        return view('routes', compact('routeCollection', 'title'));
    });
};
$adminRoutes = function () {
    Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('admin-login');
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('admin-login');
    Route::middleware('auth')->group(function () {
        Route::group(['as'=>'admin.'], function () {
            Route::get('preview-document/{page}/{id?}', [UserNoimController::class, 'previewDocument'])->name('userNoim.preview-document');

            Route::post('delete-document-signature', [UserNoimController::class, 'deleteDocumentSignature'])->name('delete-document-signature');

            Route::post('document-signature', [UserNoimController::class, 'saveSignature'])->name('documents.signature');
            Route::get('download-selected-document/{id}/{user_id}', [UserNoimController::class, 'downloadSelectedDocument'])->name('downloadSelectedDocument');
           
        });

        Route::group(['prefix' => 'referrers'], function () {
            Route::get('/', function () {
                return view('admin.referrers.calendar');
            });
            Route::get('create-new-referrers', function () {
                return view('admin.referrers.create-new-referrers');
            });
        });


        Route::get('test-google-calender-event', [CalanderController::class, 'createGoogleCalendarEvent']);
        Route::resource('marriage-celebrants', CelebrantsController::class);
        Route::resource('account', AccountController::class);
        Route::group(['prefix' => 'account'], function () {
            Route::post('save-tax', [AccountController::class, 'addAdminTax']);
        });
        Route::post('change-booking-status', [HomeController::class, 'changeStatus']);
        Route::resource('enquiries', EnqueriesController::class);
        Route::resource('notifications', NotificationsController::class);
        Route::resource('calendar-overview', CalanderController::class);
        Route::get('all-enquiries/{slug}', [EnqueriesController::class, 'index'])->name('admin.enquiry');
        Route::post('search-enquries', [EnqueriesController::class, 'searchEnquiries']);
        Route::post('change-enquiry-status', [EnqueriesController::class, 'changeStatus']);
        Route::resource('financial-report', FinancialReportController::class);
        
        
        Route::get('financial-report/locations/{id}', [FinancialReportController::class, 'getReportLocation']);
        Route::post('search-financial-report-date',[FinancialReportController::class, 'searchReportByDate']);

        Route::resource('all-type-of-ceremonies', CeremoniesTypeController::class);
       
       
        Route::get('ceremonies/edit', function () {
            return view('admin.type-ceremonies.edit');
        });
        
        //common function to make user active and inactive
        Route::post('/change-user-status', [CelebrantsController::class, 'changeStatus']);
        Route::post('search-location', [LocationsController::class, 'searchAdminLocation']);

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

        Route::get('all-payments/{slug}', [InvoicesController::class, 'index'])->name('admin.payments');
        Route::resource('payments', InvoicesController::class);
        Route::get('couple-info', [InvoicesController::class, 'getUserInfo']);
        Route::get('recipient-info', [InvoicesController::class, 'getRecipientInfo']);


        Route::post('search-payments', [InvoicesController::class, 'searchByStatusDate']);
        Route::get('search-by-invoice', [InvoicesController::class, 'searchByInvoice']);

        Route::get('locations/{slug}', 'App\Http\Controllers\Admin\LocationsController@index')->name('locations.all-requests');

        Route::post('store-location', 'App\Http\Controllers\Admin\LocationsController@store')->name('locations.store');
        Route::post('send-followup-email', [AccountController::class, 'sendFollowUpEmail'])->name('sendFollowUpEmail');
        
        Route::get('send-followup-email-button/{userid}/{celebrantId}', [AccountController::class, 'sendFollowUpEmailOnButton'])->name('admin.sendFollowUpEmailOnButton');

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
            Route::post('save-detail/{id}', [DashboardController::class, 'saveSignedDocumentDetail'])->name('admin.marriage.save-detail');
            Route::get('/{slug?}', [MarriagesController::class, 'index'])->name('admin.marriages');
            Route::post('save-celebrant', [MarriagesController::class, 'saveCelebrant'])->name('save-celebrant');
            Route::get('detail/{id}', [MarriagesController::class, 'detail'])->name('marriage.detail');
            Route::post('search-location', [MarriagesController::class, 'searchMarriageByLocation']);
            Route::post('search-marriages', [MarriagesController::class, 'searchMarriagesByDate']);
            Route::post('search-by-user', [MarriagesController::class, 'searchMarriagesByUser']);
            Route::post('detail/{id}', [DashboardController::class, 'saveDocs'])->name('celebrant.marriage.saveDocs');
        });

        Route::post('user-noims/update/{id}', [UserNoimController::class, 'updateUserNoim'])->name('admin.user-noims.update');
        Route::get('user/noim/{id}', [UserNoimController::class, 'userNoim'])->name('admin.user-noim.steps');
        Route::get('download/{file}', [DownloadController::class, 'downloadDocument'])->name('downloadDocument');
        Route::get('view/{file}', [DownloadController::class, 'viewDocument'])->name('viewDocument');
        Route::get('download-invoice/{id}', [DownloadController::class, 'downloadInvoices'])->name('downloadInvoices');
        Route::post('saveFeedback', [DashboardController::class, 'bookingFeedback'])->name('celebrant.saveFeedback');
        Route::post('deleteRecord', [DashboardController::class, 'deleteRecord']);
        Route::post('saveRecord', [DashboardController::class, 'saveRecord'])->name('celebrant.saveRecord');

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
        Route::get('gift-voucher/{slug}', [GiftVouchersController::class, 'index'])->name('gift-voucher.all-orders');

        Route::resource('gift-vouchers', GiftVouchersController::class);
        Route::get('search-voucher', [GiftVouchersController::class, 'searchGiftVoucher']);
        Route::post('search-coupon-orders', [GiftVouchersController::class, 'searchGiftOrderByDate']);
        Route::get('search-coupon-orders-by-name', [GiftVouchersController::class, 'searchGiftOrderByName']);
        
        

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

        Route::get('booked-order-details', function () {
            return view('admin.marriages.booked-order-details');
        });

        Route::get('routes', function () {
            $routeCollection = Route::getRoutes();
            $title = "Route List";
            return view('routes', compact('routeCollection', 'title'));
        });


    });

};
$partnerRoutes = function () {
    Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('partner-login');
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('partner-login');
    Route::get('sign-up', 'App\Http\Controllers\Auth\RegisterController@showSignupForm')->name('partner-signup');
   
    Route::middleware('auth')->group(function () {
        Route::group(['prefix' => 'calendar'], function () {
            Route::get('/', function () {
                return view('partner.calendar.calendar');
            });
            Route::get('block-out-times', function () {
                return view('partner.calendar.block-out-times');
            });
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
       
       
    });
};
$celebrantRoutes = function () {
    Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('celebrant-login');
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('celebrant-login');
    Route::get('sign-up', 'App\Http\Controllers\Auth\RegisterController@showCelebrantSignupForm')->name('celebrant-signup');
    Route::post('celebrant/register', 'App\Http\Controllers\Auth\RegisterController@celebrantRegister')->name('celebrantRegister');

   

    Route::middleware('auth')->group(function () {
        Route::group(['as'=>'celebrant.'], function () {
            Route::get('preview-document/{page}/{id?}', [UserNoimController::class, 'previewDocument'])->name('userNoim.preview-document');

            Route::post('delete-document-signature', [UserNoimController::class, 'deleteDocumentSignature'])->name('delete-document-signature');

            Route::post('document-signature', [UserNoimController::class, 'saveSignature'])->name('documents.signature');
            Route::get('download-selected-document/{id}/{user_id}', [UserNoimController::class, 'downloadSelectedDocument'])->name('downloadSelectedDocument');
           
        });
        Route::resource('certificate-register', CertificateRegisterController::class);
       
        Route::post('/certificate-register-update/{id}', [CertificateRegisterController::class, 'update'])->name('certificate-register.update');
        Route::any('search-by-date', [CertificateRegisterController::class, 'searchCertificateByDate']);
             
        Route::group(['prefix' => 'upcoming'], function () {
            Route::get('/{slug?}', [DashboardController::class, 'index'])->name('celebrant.marriages');
            Route::get('detail/{id}', [DashboardController::class, 'detail'])->name('celebrant.marriage.detail');
            Route::post('save-detail/{id}', [DashboardController::class, 'saveSignedDocumentDetail'])->name('celebrant.marriage.save-detail');
            Route::post('detail/{id}', [DashboardController::class, 'saveDocs'])->name('celebrant.marriage.saveDocs');
            Route::post('search-marriage', [DashboardController::class, 'searchCelebrantMarriagesWithStatus']);
            Route::post('search-marriage-by-date', [DashboardController::class, 'searchCelebrantMarriagesWithDate']);
        });
        Route::post('user-noims/update/{id}', [UserNoimController::class, 'updateUserNoim'])->name('celebrant.user-noims.update');
        Route::get('user/noim/{id}', [UserNoimController::class, 'userNoim'])->name('celebrant.user-noim.steps');
        Route::get('download/{file}', [DownloadController::class, 'downloadDocument'])->name('downloadDocument');
        Route::get('view/{file}', [DownloadController::class, 'viewDocument'])->name('viewDocument');
        Route::get('download-invoice/{id}', [DownloadController::class, 'downloadInvoices'])->name('downloadInvoices');
        Route::post('saveFeedback', [DashboardController::class, 'bookingFeedback'])->name('celebrant.saveFeedback');
        Route::post('deleteRecord', [DashboardController::class, 'deleteRecord']);
        Route::post('saveRecord', [DashboardController::class, 'saveRecord'])->name('celebrant.saveRecord');
        Route::post('search-by-user', [DashboardController::class, 'searchMarriagesByUser']);
        Route::post('change-booking-status', [HomeController::class, 'changeStatus']);
        Route::get('profile', [AccountController::class, 'getCelebrantAccount'])->name('getCelebrantAccount');
        Route::post('account', [AccountController::class, 'updateCelebrantAccount']);
        Route::put('account/update', [AccountController::class, 'updateCelebrantAccount'])->name('updateCelebrantAccount');

        Route::post('send-followup-email', [AccountController::class, 'sendFollowUpEmail'])->name('sendFollowUpEmail');
        Route::get('send-followup-email-button/{userid}/{celebrantId}', [AccountController::class, 'sendFollowUpEmailOnButton'])->name('celebrant.sendFollowUpEmailOnButton');
        Route::resource('all-locations', CelebrantLocations::class);

        Route::post('get-packages', [LocationsController::class, 'getPackages']);
        Route::post('search-location', [CelebrantLocations::class, 'searchCelebrantLocationWithStatus']);
        Route::post('assign-location', [CelebrantLocations::class, 'assignLocation']);
        // Route::get('all-invoices/{slug}', [CelebrantInvoices::class, 'index'])->name('celebrant.invoices');
        Route::resource('invoices', CelebrantInvoices::class);
        Route::get('couple-info', [InvoicesController::class, 'getUserInfo']);
        Route::post('search-invoices', [CelebrantInvoices::class, 'searchCelebrantInvoices']);

        Route::resource('calendar', CalendarController::class);
        Route::post('search-calendar-by-location',[CalendarController::class, 'searchCalendarByLocation']);
        Route::post('search-calendar-with-couple',[CalendarController::class, 'searchCalendarByCouple']);
        


        Route::get('calendars/over-ride', [CalendarController::class,'overRideCreate'])->name('calendar.over-ride');

        Route::get('over-ride-day', [CalendarController::class,'overRideDay'])->name('calendar.overRideDay');
        Route::get('over-ride-day-slots', [CalendarController::class,'overRideDaySlots'])->name('calendar.overRideDay-slots');

        Route::post('over-ride-form-save', [CalendarController::class,'overRideFormSubmit'])->name('calendar.overRide-form-save');

        Route::get('celebrant-calendar-data/{date}/{type}', [CalendarController::class, 'celebrantCalendarData'])->name('celebrantCalendarData');
        
        Route::post('celebrant-location-check', [CalendarController::class,'checkCelebrantLocation'])->name('celebrant-location-check');
        Route::get('routes', function () {
            $routeCollection = Route::getRoutes();
            $title = "Route List";
            return view('routes', compact('routeCollection', 'title'));
        });

        // Route::get('add', function () {
        //     return view('celebrant.calendar.add');
        // });
        Route::post('add', function () {
            return view('celebrant.calendar.add');
        });
    });

    Route::get('availablity-overview', function () {
        return view('celebrant.upcoming.availablity-overview');
    });
    Route::get('availablity-upcoming-docs', function () {
        return view('celebrant.upcoming.availablity-upcoming-docs');
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

    Route::get('financial-report', function () {
        return view('celebrant.financial-report.listing');
    });
    Route::get('location', function () {
        return view('celebrant.financial-report.location');
    });

    Route::get('calendar-design', function () {
        return view('celebrant.calendar.design');
    });

    

    // component render
    Route::get('day-sub-slots',[CalendarController::class,'subSlots'])->name('sub-slots-html-component');
};

Route::group(array('domain' => config('env.PARTNER')), $partnerRoutes);
Route::group(array('domain' => config('env.CELEBRANT')), $celebrantRoutes);
Route::group(array('domain' => config('env.ADMIN')), $adminRoutes);
Route::group(array('domain' => config('env.WEBSITE')), $websiteRoutes);
Auth::routes();



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// To list the all routes on web
