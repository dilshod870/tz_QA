<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventA;
use App\EventB;
use Mail;

class EventController extends Controller
{

    public function index_a(){
        return  view('events.eventa');
    }

    public function index_b(){
        return  view('events.eventb');
    }

    public function event_a(Request $request)
    {
        $res = EventA::create($request->all());
        if ($res) {
            $response = 'Ваша заявка принята';
        } else {
            $response = 'Попробуйте позже податӣ завку.';
        }
        return response($response, 200);
    }

    public function event_b(Request $request)
    {
        $res = EventB::create($request->all());
        if ($res) {
            $response = 'Ваша заявка принята';
        } else {
            $response = 'Попробуйте позже податӣ завку.';
        }
        return response($response, 200);
    }
}
