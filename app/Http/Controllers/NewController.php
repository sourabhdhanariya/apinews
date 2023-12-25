<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewController extends Controller
{
    public function index()
    {
        $apiKey = '4f9ee11c8a7b44b3a649ac9c7a78e9a4';
        $url = 'https://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=' . $apiKey;
        $response = Http::get($url);
        if ($response->successful()) {
            $data = $response->json();

            return view('news.index', ['news' => $data['articles']]);
        } else {
            return response()->json(['error' => 'Failed to fetch news data'], $response->status());
        }
    }   
}

