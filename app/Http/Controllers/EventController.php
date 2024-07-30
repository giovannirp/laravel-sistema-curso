<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Destaques;

class EventController extends Controller
{
    public function index() {
       $events = Event::all();
       return view('welcome', ['events' => $events]);
    }

    public function create() {
        return view('events.create');
    }

    public function destaques() {
        $destaques = Destaques::all();
        return view('destaques', ['destaques' => $destaques]);
    }
}
