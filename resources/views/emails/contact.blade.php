@component('mail::message')
# Introduction
welcome
The body of your message.
hello {{ $message }}

@component('mail::button', ['url' => '$url'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
