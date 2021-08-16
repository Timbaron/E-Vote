@component('mail::message')
# Welcome to B-Vote
You've been Inivted to a partisipate in a private poll, <br>
<!-- <a href="">Click to vote</a>    -->
@component('mail::button', ['url' => '{{env('APP_URL').'/poll/cast/'}}'])
Click here to vote
@endcomponent

Thanks,<br>
{{ config('app.name') }}env
@endcomponent
