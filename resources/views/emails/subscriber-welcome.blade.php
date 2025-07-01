@component('mail::message')

# 👋 Welcome to Our Community

Thanks for subscribing with **{{ $email }}**!

We’re excited to have you join us. You’ll now receive the latest updates and content from us, straight to your inbox.

@component('mail::button', ['url' => url('/')])
Visit Our Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent
