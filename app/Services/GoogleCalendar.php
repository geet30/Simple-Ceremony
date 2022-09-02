<?php

use Google_Client;
use Google_Service_Directory;

class GoogleCalendar
{
    public static function getClient()
    {
        $client = new Google_Client();
        $client->setApplicationName(config('app.name'));
        $client->setScopes(Google_Service_Directory::CALENDAR_READONLY);
        $client->setAuthConfig(storage_path('app/google-calendar/client_secret.json'));
        $client->setAccessType('offline');
        return $client;
    }

    /**
     * Returns an authorized API client.
     * @return Google_Client the authorized client object
     */
    public function oauth()
    {
        $client = $this->getClient();

        // Load previously authorized credentials from a file.
        $credentialsPath = storage_path('app/google-calendar/client_secret.json');
        if (!file_exists($credentialsPath)) {
            return false;
        }

        $accessToken = json_decode(file_get_contents($credentialsPath), true);
        $client->setAccessToken($accessToken);

        // Refresh the token if it's expired.
        if ($client->isAccessTokenExpired()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            file_put_contents($credentialsPath, json_encode($client->getAccessToken()));
        }
        return $client;
    }
}
