{{-- resources/views/sendgrid_test_form.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendGrid Test Email Form</title>
</head>
<body>

<div class="container">
    <h1>Send Test Email via SendGrid</h1>
    <form method="POST" action="{{ route('sendgrid.test.email') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" id="email" name="email" required placeholder="Enter email to test">
        </div>
        <button type="submit" class="btn btn-primary">Send Test Email</button>
    </form>
</div>

</body>
</html>
