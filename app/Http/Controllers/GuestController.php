<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function getHome() {}

    public function createGuest(Request $request) {}

    public function getEditReservation($guest_id) {}

    public function editReservation(Request $request, $guest_id) {}

    public function deleteReservation(Request $request, $guest_id) {}

    public function updateGuest(Request $request, $guest_id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $guest = Guest::findOrFail($guest_id);
        $guest->update($request->all());

        return redirect()->route('getHome')->with('success', 'Guest updated successfully');
    }

    public function deleteGuest($guest_id)
    {
        $guest = Guest::findOrFail($guest_id);
        $guest->delete();

        return redirect()->route('getHome')->with('success', 'Guest deleted successfully');
    }
}
