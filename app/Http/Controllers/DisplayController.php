<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Session;
use Hash;
use DB;

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
    private function generateSitemap($urls)
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset/>');
        $xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        foreach ($urls as $url) {
            $urlTag = $xml->addChild('url');
            $urlTag->addChild('loc', $url['loc']);
            $urlTag->addChild('lastmod', $url['lastmod']);
            $urlTag->addChild('changefreq', $url['changefreq']);
            $urlTag->addChild('priority', $url['priority']);
        }

        return $xml->asXML();
    }
}
