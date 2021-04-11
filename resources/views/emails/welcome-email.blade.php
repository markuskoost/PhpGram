@component('mail::message')
# Welcome to PhpGram

Thank you for joining us.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

All the best,<br>
{{ config('app.name') }}
@endcomponent
