@component('mail::message')
# Introduction

Your Code is :  {{ $code }}

@component('mail::button', ['url' => $url])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
