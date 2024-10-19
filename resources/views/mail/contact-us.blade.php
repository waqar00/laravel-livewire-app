<x-mail::message>
# Introduction
Contact us Message

Name:{{$data['name']}}
email:{{$data['email']}}
message:{{$data['message']}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
