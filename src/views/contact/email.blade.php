@component('mail::message')
# Introduction

This is a new message from.

Name: {{ $name }}
<br>
Phone: {{ $phone }}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
