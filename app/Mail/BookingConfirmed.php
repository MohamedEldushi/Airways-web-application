<?php
namespace App\Mail;

// use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Mail\Mailable;
// use Illuminate\Queue\SerializesModels;
// use App\Models\Booking;
use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class BookingConfirmed extends Mailable
{
//     use Queueable, SerializesModels;

//     public $booking;
//     public $totalPrice;
//     public $passengersDetails; // Changed from protected to public for direct access in the markdown view if necessary
//     public function __construct(Booking $booking, $totalPrice)
//     {
//         $this->booking = $booking;
//         $this->totalPrice = $totalPrice;
//         // Load passengers relationship if not already loaded
//         if (!$booking->relationLoaded('passengers')) {
//             $booking->load('passengers');
//         }
//         // Assuming Passenger is a related model with the necessary attributes
//         $this->passengersDetails = $booking->passengers;
//     }


//     public function build()
//     {
//         return $this->from('mohamed.eldushi@gmail.com', 'MedSky')
//         ->subject('Booking Confirmation')
//         ->markdown('emails.booking.confirmed', [
//             'booking' => $this->booking,
//             'totalPrice' => $this->totalPrice,
//             'passengersDetails' => $this->passengersDetails,
//         ]);
//     }

// }

    use Queueable, SerializesModels;

    public $booking, $totalPrice;

    public function __construct(Booking $booking, $totalPrice)
    {
        $this->booking = $booking;
        $this->totalPrice = $totalPrice;
    }

    public function build()
    {
        return $this->from('mohamed.eldushi@gmail.com', 'MedSky')
                    ->subject('Your Booking Confirmation')
                    ->markdown('emails.booking.confirmed', [
                        'booking' => $this->booking,
                        'totalPrice' => $this->totalPrice,
                                        ]);
    }
}
