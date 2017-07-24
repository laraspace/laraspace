@component('mail::message')
# Introduction

This is a test email

@component('mail::button', ['url' => ''])
Buy Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
