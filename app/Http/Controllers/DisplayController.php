<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index(){
        return view('index');
    }
    public function services(){
        return view('services');
    }
    public function sitemap()
    {
        // Array to store URLs
        $urls = [];

        // Add static pages
        $urls[] = [
            'loc' => URL::to('/'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'daily',
            'priority' => '1.0'
        ];

        $urls[] = [
            'loc' => URL::to('/dich-vu'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ]; 
        // Generate XML
        $xml = $this->generateSitemap($urls);

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }
}
