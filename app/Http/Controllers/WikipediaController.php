<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WikipediaController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'User-Agent' => 'DailyKnowledgeApp/v1.0 (uzif8100@gmail.com)',
        ])->get('https://id.wikipedia.org/api/rest_v1/page/random/summary');

        if ($response->failed()) {
            return response()->json(['error' => 'Gagal mengambil data'], $response->status());
        } else {
            $data = $response->object();
        }

        return view('index', compact('data'));
    }
}
