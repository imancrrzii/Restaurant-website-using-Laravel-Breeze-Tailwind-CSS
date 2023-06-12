<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {           
        $reservation = $request->session()->get('reservation');
        return view('reservations.step-one',compact('reservation'));
    }

    public function storeStepOne(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'reser_date' => ['required'],
            'no_telp' => ['required'],
            'guest_number' => ['required'],
        ]);

        if(empty($request->session()->get('reservation'))){
            $reservation = new Reservation;
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }
        return to_route('reservations.step.two');
    }

    public function stepTwo(Request $request)
    {           
        $reservation = $request->session()->get('reservation');
        $tables = Table::where('status', TableStatus::Available)->where('guest_number', '>=', $reservation->guest_number)->get();
        return view('reservations.step-two',compact('reservation', 'tables'));
    }

    public function storeStepTwo(Request $request)
    {
        $validated = $request->validate(['table_id' => ['required']]);
        $reservation = $request->session()->get('reservation');
        $reservation->fill($validated);
        $reservation->save();
        $request->session()->forget('reservation');

        return to_route('thanks');
    }
}
