@extends('dashboard-layout.user-dashboard')

@section('content')



<section>
    <div class="pb-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-4 col-box">

                    <div class="card-body text-center">
                        <img src="https://monayemislam.github.io/monayem.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <p class="mt-3 text-color-1">আবেদনকারীর আইডিঃ <span class="text-white">{{$issueDetails->raiser->id}}</span></p>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <!-- Facebook -->
                        <a class="btn btn-primary me-2" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a class="btn btn-primary me-2" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                        <!-- Google -->
                        <a class="btn btn-primary me-2" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>
                        <!-- Linkedin -->
                        <a class="btn btn-primary me-2" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="card mb-4 col-box">
                    <h5 class="card-header text-color-1 card-title-issue-detatils">অভিযোগ</h5>
                    <div class="card-body">
                        <div class="row user-info-row-details-page-table-first-element pe-3">
                            <div class="col-sm-7">
                                <p class="mb-0 text-color-1">সমাধান হয়েছে</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="text-white mb-0 text-end">{{$issueCount['solved']}}</p>
                            </div>
                        </div>

                        <div class="row user-info-row-details-page-table pe-3">
                            <div class="col-sm-7">
                                <p class="mb-0 text-color-1">সমাধান করতে হবে</p>
                            </div>
                            <div class="col-sm-5">
                            <p class="text-white mb-0 text-end">{{$issueCount['pending']}}</p>
                            </div>
                        </div>

                        <div class="row user-info-row-details-page-table pe-3">
                            <div class="col-sm-7">
                                <p class="mb-0 text-color-1">সমাধান বাতিল হয়েছে</p>
                            </div>
                            <div class="col-sm-5">
                            <p class="text-white mb-0 text-end">{{$issueCount['rejected']}}</p>
                            </div>
                        </div>

                        <div class="row user-info-row-details-page-table pe-3">
                            <div class="col-sm-7">
                                <p class="mb-0 text-color-1">মোট অভিযোগ</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="text-white mb-0 text-end">{{$issueCount['total']}}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card mb-4 col-box">
                    <h5 class="card-header text-color-1 card-title-issue-detatils">আবেদনকারীর তথ্য</h5>
                    <div class="card-body">
                        <div class="row user-info-row-details-page-table-first-element">
                            <div class="col-sm-2">
                                <p class="mb-0 text-color-1">নাম</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-white mb-0">{{$issueDetails->raiser->name}}</p>
                            </div>
                        </div>

                        <div class="row user-info-row-details-page-table">
                            <div class="col-sm-2">
                                <p class="mb-0 text-color-1">ই-মেইল</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-white mb-0">{{$issueDetails->raiser->email}}</p>
                            </div>
                        </div>

                        <div class="row user-info-row-details-page-table">
                            <div class="col-sm-2">
                                <p class="mb-0 text-color-1">ওয়ার্ড নাম্বার</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-white mb-0">{{$issueDetails->raiser->area_number}}</p>
                            </div>
                        </div>

                        <div class="row user-info-row-details-page-table">
                            <div class="col-sm-2">
                                <p class="mb-0 text-color-1">মোবাইল</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-white mb-0">(098) 765-4321</p>
                            </div>
                        </div>

                        <div class="row user-info-row-details-page-table">
                            <div class="col-sm-2">
                                <p class="mb-0 text-color-1">ঠিকানা</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-white mb-0">Bay Area, San Francisco, CA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 col-box">
                            <h5 class="card-header text-color-1 card-title-issue-detatils">অভিযোগের বিস্তারিত তথ্য</h5>
                            <div class="card-body">
                                <div class="row user-info-row-details-page-table-first-element">
                                    <div class="col-sm-2">
                                        <p class="mb-0 text-color-1">টাইটেল</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p class="text-white mb-0">{{$issueDetails->title}}</p>
                                    </div>
                                </div>

                                <div class="row user-info-row-details-page-table">
                                    <div class="col-sm-2">
                                        <p class="mb-0 text-color-1">বিস্তারিত বর্ণনা</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p class="text-white mb-0">{{$issueDetails->description}}</p>
                                    </div>
                                </div>

                                <div class="row user-info-row-details-page-table">
                                    <div class="col-sm-2">
                                        <p class="mb-0 text-color-1">তৈরী হয়েছে</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p class="text-white mb-0">{{$issueDetails->created_at}}</p>
                                    </div>
                                </div>

                                <div class="row user-info-row-details-page-table">
                                    <div class="col-sm-2">
                                        <p class="mb-0 text-color-1">আপডেট হয়েছে</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p class="text-white mb-0">{{$issueDetails->updated_at}}</p>
                                    </div>
                                </div>

                                <div class="row user-info-row-details-page-table">
                                    <div class="col-sm-2">
                                        <p class="mb-0 text-color-1">সংযুক্তি</p>
                                    </div>
                                    <div class="col-sm-10">
                                        @if (isset($issueDetails->file_path))
                                        <a class="download-btn" href="{{asset($issueDetails->file_path)}}" download>
                                            <i class="fa-solid fa-file-arrow-down pe-2"></i>Download
                                        </a>
                                        @endif
                                        @if (!isset($issueDetails->file_path))
                                        <p class="text-white mb-0">Not Found</p>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-danger btn-sm me-2">বাতিল করুন</button>
                        <button type="button" class="btn btn-success btn-sm">সমাধান হয়েছে</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection