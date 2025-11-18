<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function home()
    {
        $featuredServices = Service::available()->take(4)->get();
        return view('home', compact('featuredServices'));
    }

    public function index()
    {
        $services = Service::available()->get();
        return view('services.index', compact('services'));
    }

    public function show(Service $service)
    {
        $reviews = $service->reviews()->approved()->with('user')->get();
        return view('services.show', compact('service', 'reviews'));
    }
}