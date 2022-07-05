<?php

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
Route::group(['prefix' => 'admin'], function () {
    Route::resource('locations', App\Http\Controllers\LocationsController::class);
    // Route::get('location', function () {
    //     return view('admin.location');
    // })->name('admin-locations');

    // Route::get('add-location', function () {
    //     return view('admin.add-location');
    // });

    Route::get('add-ons', function () {
        return view('admin.add-ons');
    });

    // Route::get('location-detail', function () {
    //     return view('admin.location-detail');
    // });

    // Route::get('edit-location', function () {
    //     return view('admin.edit-location');
    // });

    Route::get('admin-add-ons-details', function () {
        return view('admin.admin-add-ons-details');
    });

    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('admin-login');


    Route::get('admin-add-ons-gallery', function () {
        return view('admin.admin-add-ons-gallery');
    });

    Route::get('all-partners', function () {
        return view('admin.partner.all-partners');
    });
    Route::get('add-new-partner', function () {
        return view('admin.partner.add-new-partner');
    });
    Route::get('edit-package', function () {
        return view('admin.partner.edit-package');
    });
    Route::get('partner-details', function () {
        return view('admin.partner.partner-details');
    });
});
Route::group(['prefix' => 'user'], function () {
    Route::get('index', function () {
        return view('user.index');
    });
});
Route::group(['prefix' => 'partner'], function () {
    Route::get('sign-up', function () {
        return view('partner.sign-up');
    });
    Route::get('all-partners', function () {
        return view('partner.all-partners');
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
    Route::get('all-invoices', function () {
        return view('partner.invoices.all-invoices');
    });
    
});
Route::group(['prefix' => 'marriage-celebrant'], function () {
    Route::get('upcomming', function () {
        return view('marriage-celebrant.upcomming.listing');
    });
    Route::get('availablity-overview', function () {
        return view('marriage-celebrant.upcomming.availablity-overview');
    });
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
