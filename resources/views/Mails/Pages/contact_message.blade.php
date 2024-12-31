<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Message</title>
</head>
<body>
    <h1>Contact Form Details</h1>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $details['message'] }}</p>
</body>
</html>
