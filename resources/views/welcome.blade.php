@extends('layouts.dashboard-layout')

@section('content')
<div class="row py-3 class=">
    <div class="d-flex align-items-center justify-content-center">
        <p class="h1 fw-bolder text-success">ই-কাউন্সিলর</p>
    </div>
    <hr>
    <div class="row px-5 align-items-center mt-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h4 class="card-title">বার্তা</h4>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="card-text">ই-কাউন্সিলর প্ল্যাটফর্মের মাধ্যমে আপনি আপনার বঞ্চিত নাগরিক সেবার কথা উল্লেখ করে আপনার ওয়ার্ড কাউন্সিলর বরাবর অভিযোগ জানাতে পারেন।
                            আপনার অভিযোগের ভিত্তিতে আপনার নাগরিক সেবা নিশ্চিতে আমরা বদ্ধ পরিকর । </p>
                        <footer class="blockquote-footer">চাঁপাইনবাবগঞ্জ পৌরসভা, বাংলাদেশ</footer>
                    </blockquote>
                </div>
            </div>

        </div>
        <div class="col-md-7">
            <div class="d-flex text-success">
                <div class="d-flex align-items-center">
                    <div>
                        <div>প্রথম ধাপ</div>
                        <div class="card bg-secondary text-white">

                            <div class="card-body lead">
                                রেজিষ্ট্রেশন করুন
                            </div>
                        </div>
                    </div>
                    <div><i class="fa-solid fa-2x fa-arrow-right mt-4 mx-2"></i></div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <div>দ্বিতীয় ধাপ</div>
                        <div class="card bg-primary text-white">

                            <div class="card-body lead">
                                লগিন করুন
                            </div>
                        </div>
                    </div>
                    <div><i class="fa-solid fa-2x fa-arrow-right mt-4 mx-2"></i></div>
                </div>

                <div class="d-flex">
                    <div class="">
                        <div>তৃতীয় ধাপ</div>
                        <div class="card bg-success text-white">
                            <div class="card-body lead">
                                আপনার অভিযোগ দাখিল করুন
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="text-center d-flex justify-content-center">
            <div class="d-flex">
            <a href="{{ route('register') }}" class="btn btn-outline-dark btn-lg me-2">রেজিষ্ট্রেশন করতে ক্লিক করুন এখানে</a>
            <a href="{{ route('login') }}" class="btn btn-outline-success btn-lg me-2">লগিন করতে ক্লিক করুন এখানে</a>
            </div>
        </div>
    </div>
</div>
@endsection