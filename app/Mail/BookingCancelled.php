<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Booking;

class BookingCancelled extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        // Assuming $this->booking is the booking instance injected into this Mailable
        $firstName = $this->booking->passengers->first()->first_name; // Adjust based on actual relationship/method
        $bookingReference = $this->booking->booking_reference;

        return $this->from('mohamed.eldushi@gmail.com', 'MedSky')
                    ->subject('Your Booking Has Been Cancelled')
                    ->view('emails.booking.booking_cancelled')
                    ->with([
                        'firstName' => $firstName,
                        'bookingReference' => $bookingReference,
                    ]);
    }


}
