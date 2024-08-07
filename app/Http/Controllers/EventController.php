<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Destaques;
use App\Models\Palestrantes;

class EventController extends Controller
{
    public function index() {
       $events = Event::all();
       return view('welcome', ['events' => $events]);
    }

    public function create() {
        return view('events.create');
    }

    public function createPalestrante() {
        return view('events.palestrante');
    }

    public function store(Request $request) {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');
    }

    public function palestrantCreate(Request $request) {
        $eventPalestrants = new Palestrantes;

        $eventPalestrants->nome = $request->nome;
        $eventPalestrants->idade = $request->idade;
        $eventPalestrants->formacao = $request->formacao;

        $eventPalestrants->save();

        return redirect('/palestrantes');
    }

    public function destaques() {
        $destaques = Destaques::all();
        return view('destaques', ['destaques' => $destaques]);
    }

    public function palestrantes() {
        $palestrantes = Palestrantes::all();
        return view('palestrantes', ['palestrantes' => $palestrantes]);
    }
}
