@component('mail::message')
# Welcome to B-Vote
You've been Inivted to a partisipate in a private poll, <br>
<!-- <a href="">Click to vote</a>    -->
Use this Poll Id {{$poll_id}}
@component('mail::button', ['url' => '{{config("app.url").\'/poll/cast/new\''}}])
Click here to vote
@endcomponent

Thanks,<br>
{{ config('app.name') }}env
@endcomponent
