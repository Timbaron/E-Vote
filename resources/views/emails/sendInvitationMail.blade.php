@component('mail::message')
# Voting Invite

Dear {{$email}}, you have been invited to take part in a Poll "{{$poll->position}}", This poll is expected to start by {{$poll->start_time}} on the {{$poll->start_date}}
and come to an end by {{$poll->end_time}} on the {{$poll->end_date}}.
{{-- {{$poll}} --}}

@component('mail::button', ['url' => ''])
Click here to vote now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
