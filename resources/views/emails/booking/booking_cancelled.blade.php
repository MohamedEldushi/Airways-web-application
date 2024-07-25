{{-- resources/views/emails/booking/booking_cancelled.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <title>Booking Cancelled</title>
</head>
<body>
    <h1>Your Booking Has Been Cancelled</h1>
    <p>Dear {{ $firstName }},</p>
    <p>Your booking with reference <strong>{{ $bookingReference }}</strong> has been cancelled.</p>
</body>
</html>
