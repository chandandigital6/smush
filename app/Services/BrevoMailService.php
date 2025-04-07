<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class BrevoMailService
{
    public static function send($data)
    {
        // Replace with your API endpoint and API key
        $response = Http::withHeaders([
            'Api-Key' => env('BREVO_API_KEY'),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post('https://api.brevo.com/v3/smtp/email', $data);

        dd($response->json());

        return $response->successful();
    }
}
