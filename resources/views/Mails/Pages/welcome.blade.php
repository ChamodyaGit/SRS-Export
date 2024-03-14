@extends('Mails.Layouts.mail')
@section('content')
    <div class="report-content">
        <h4>Welcome {{ $sendData['email'] }},</h4>
        <p>Thank you for signing up for Mysales.</p>
        <p>Please use these creadentislas for login your system</p>
        <a href="{{ $workspace->url }}">
            <button type="button" class="btn btn-info"
                style="background-color: #6ca925;border: none;color: white;padding: 10px 24px;text-align: center;text-decoration: none;display: inline-block;border-radius: 4px;">Go to system</button>

        </a>
        <p>admin email: admin@gmail.com</p>
        <p>Password: 123456789</p>
        <br>
        <p>Thank you for using our application!</p>
        <p>If you didn't request this please ignore this email.</p>
        <p>The Mysales Team</p>
    </div>
@endsection
<style>
    .report-content {
        font-size: 11px;
    }
</style>
