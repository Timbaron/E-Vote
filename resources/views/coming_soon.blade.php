@extends('layouts.coming-soon')
@section('content')
<div class="size1 bg0 where1-parent">
    <!-- Coutdown -->
    <div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('images/bg01.jpg');">
        <div class="wsize2 flex-w flex-c-m cd100 js-tilt">
            <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                <span class="l2-txt1 p-b-9 days">10</span>
                <span class="s2-txt4">Days</span>
            </div>

            <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                <span class="l2-txt1 p-b-9 hours">17</span>
                <span class="s2-txt4">Hours</span>
            </div>

            <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                <span class="l2-txt1 p-b-9 minutes">50</span>
                <span class="s2-txt4">Minutes</span>
            </div>

            <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                <span class="l2-txt1 p-b-9 seconds">39</span>
                <span class="s2-txt4">Seconds</span>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
        <div class="wrap-pic1">
            <img src="images/icons/logo.png" alt="LOGO">
        </div>

        <div class="p-t-50 p-b-60">
            <p class="m1-txt1 p-b-36">
                This feature is <span class="m1-txt2">Coming Soon</span>, follow us for update now!
            </p>
            <div class="flex-w">
                {{-- <a href="#" class="flex-c-m size5 bg3 how1 trans-04 m-r-5">
                    <i class="fa fa-facebook"></i>
                </a> --}}

                <a href="https://twitter.com/Bvote13" target="_blank" class="flex-c-m size5 bg4 how1 trans-04 m-r-5">
                    <i class="fa fa-twitter"></i>
                </a>

                {{-- <a href="#" class="flex-c-m size5 bg5 how1 trans-04 m-r-5">
                    <i class="fa fa-youtube-play"></i>
                </a> --}}
            </div>
            <p class="s2-txt3 p-t-18">
                And don’t worry, we hate spam too! You can unfollow at anytime.
            </p>
        </div>


    </div>
</div>
@endsection
