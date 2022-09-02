<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Booking, User, Locations};
use App\Traits\Marriages\{Methods as MarriagesMethods};
use Illuminate\Support\Carbon;
use Spatie\GoogleCalendar\Event;

class CalanderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $date = Carbon::today();
            $date = $request->ajax() ? $request->date : $date->format('Y/m/d');
            $count['marriageBookings'] = Booking::count();
            $count['marriageCelebrant'] = Booking::whereNotNull('celebrant_id')->groupBy('celebrant_id')->count();
            $count['marriageLocation'] = Booking::whereNotNull('locationId')->groupBy('locationId')->count();
            $bookings = MarriagesMethods::marriages($date)->get();
            if ($request->ajax()) {
                return $bookings;
            }
            // return $bookings;
            return $request->ajax() ? $bookings : view('admin.calander.calander-overview', compact('bookings', 'count'));
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function connectGoogleCalendar()
    {
        $client = GoogleCalendar::getClient();
        $authUrl = $client->createAuthUrl();
        return redirect($authUrl);
    }
    public function storeGoogleCalendarCredentials()
    {
        $client = GoogleCalendar::getClient();
        $authCode = request('code');
        // Load previously authorized credentials from a file.
        $credentialsPath = storage_path('app/google-calendar/client_secret.json');
        // Exchange authorization code for an access token.
        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

        // Store the credentials to disk.
        if (!file_exists(dirname($credentialsPath))) {
            mkdir(dirname($credentialsPath), 0700, true);
        }
        file_put_contents($credentialsPath, json_encode($accessToken));
        return redirect('/calander-overview')->with('message', 'Credentials saved');
    }

    public function createGoogleCalendarEvent()
    {
        Event::create([
            'name' => 'A new event',
            'startDateTime' => Carbon::now(),
            'endDateTime' => Carbon::now()->addHour(),
        ]);
    }
}
