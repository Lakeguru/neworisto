@component('mail::message')
# Introduction
welcome
The body of your message.
The body of your message.
The body of your message.
The body of your message.
The body of your message.

{{$message}}

@component('mail::button', ['url' => '$url'])
Button Text
@endcomponent

Thanks,<br>
Oristo Universal
@endcomponent
