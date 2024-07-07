<?php

namespace App\Http\Controllers;

use App\Mail\BookingNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    //
    public function index()
    {
        return view('booking', []);
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|string',
            'time' => 'required|string',
            'location' => 'required|string|max:255',
            'note' => 'required|string',
            'eyelash' => 'nullable|array',
            'filler-botox' => 'nullable|array',
            'mesotherapy' => 'nullable|array',
            'fat-dissolve' => 'nullable|array',
            'cosmetic-surgery' => 'nullable|array',
            'hair-spa' => 'nullable|array',
            'skin-care' => 'nullable|array',
            'pinky-bikini' => 'nullable|array',
        ]);
        $services = [];
        $serviceFields = ['eyelash', 'filler-botox', 'mesotherapy', 'fat-dissolve', 'cosmetic-surgery', 'hair-spa', 'skin-care', 'pinky-bikini'];

        foreach ($serviceFields as $field) {
            if (isset($validatedData[$field]) && is_array($validatedData[$field])) {
                $services[$field] = implode(', ', $validatedData[$field]);
            }
        }

        $bookingData = array_merge($validatedData, ['services' => $services]);

        Mail::to(env('MAIL_USERNAME'))->send(new BookingNotification($bookingData));

        return redirect()->route('booking.index')->with('success', 'Đặt lịch thành công!');
    }
}
