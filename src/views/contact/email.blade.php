@component('mail::message')
# Introduction

There is a new query from {{$name}}  <br>
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
