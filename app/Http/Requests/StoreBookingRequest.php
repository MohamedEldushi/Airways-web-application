<?php
namespace App\Http\Requests;

// namespace App\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;

// class StoreBookingRequest extends FormRequest
// {
//     /**
//      * Determine if the user is authorized to make this request.
//      */
//     public function authorize(): bool
//     {
//         return true;
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
//      */
//     public function rules()
// {
//     return [


//         'departure_flight_id' => 'required|exists:flights,id',
//         // 'return_flight_id' => 'nullable|exists:flights,id',
//         'return_flight_id' => 'nullable|exists:flights,id',


//         'passengers.*.title' => 'required|string',
//         'passengers.*.first_name' => 'required|string|max:255',
//         'passengers.*.last_name' => 'required|string|max:255',
//         'passengers.*.gender' => 'required|string|in:Male,Female',
//         'passengers.*.birthDate' => 'required|date',
//         'passengers.*.nationality' => 'required|string',
//         'passengers.*.passportNumber' => 'required|string',
//         'passengers.*.expiryDate' => 'required|date',
//         'emailAddress' => 'required|email',
//         'countryCode' => 'required|string',
//         'mobileNumber' => 'required|string',
//           // 'flight_id' => 'required|exists:flights,id',
//         // 'flight_id' => 'required|exists:flights,id',

//         // 'departure_flight_id' => 'required|exists:flights,id',
//         // 'return_flight_id' => 'sometimes|nullable|exists:flights,id',
//         // Add other fields and validation rules as necessary
//     ];
// }

// }



use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    // Determine if the user is authorized to make this request
    public function authorize()
    {
        return true; // Consider changing based on auth logic
    }

    // Get the validation rules that apply to the request
    public function rules()
    {

        return [
            'departure_flight_id' => 'required|exists:flights,id',
            'return_flight_id' => 'nullable|exists:flights,id',
            'departure_class' => 'required|string',
            'return_class' => 'nullable|string',
            'departure_price' => 'required|numeric',
            'return_price' => 'nullable|numeric',
            'totalPrice' => 'required|numeric',
            'status' => 'required|string',
            'payment_status' => 'required|string',
            'email' => 'required|email',
            'country_code' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'booking_date' => 'required|date',
            'totalPrice' => 'required|numeric',
            'passengers' => 'required|array',
            'passengers.*.title' => 'required|string',
            'passengers.*.first_name' => 'required|string',
            'passengers.*.last_name' => 'required|string',
            // Add more rules for each passenger detail as necessary
        ];
        // return [
        //     'departure_flight_id' => 'required|exists:flights,id',
        //     'return_flight_id' => 'nullable|exists:flights,id',
        //     'passengers.*.title' => 'required|string',
        //     'passengers.*.first_name' => 'required|string|max:255',
        //     'passengers.*.last_name' => 'required|string|max:255',
        //     'passengers.*.gender' => 'required|in:Male,Female',
        //     'passengers.*.birth_date' => 'required|date',
        //     'passengers.*.nationality' => 'required|string',
        //     'passengers.*.passport_number' => 'required|string',
        //     'passengers.*.passport_expiry_date' => 'required|date',
        //     'email' => 'required|email',
        //     'phone_number' => 'required|string',
        //     // Add other fields as necessary
        // ];
    }
}
