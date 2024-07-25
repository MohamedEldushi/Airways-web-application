@component('mail::message')
# Flight Status Update

Hello,

We are sending you an update regarding your flight.

**Flight Number:** {{ $flightNumber }}

**Status:** {{ $status }}

@component('mail::button', ['url' => ''])
View Flight Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
