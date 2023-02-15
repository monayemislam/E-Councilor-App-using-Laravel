@extends('dashboard-layout.user-dashboard')

@section('content')



<section>
    <div class="pb-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4 col-box">
                    <h5 class="card-header text-color-1 card-title-issue-detatils">আবেদনকারীর ছবি এবং আইডি নাম্বার</h5>
                    <div class="card-body text-center">
                        <img src="https://monayemislam.github.io/monayem.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <p class="mt-3 text-color-1">ইউজার আইডিঃ <span class="text-white">{{$issueDetails->raiser->id}}</span></p>
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
                <div class="card mb-4 mb-lg-0 col-box">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-sm list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-globe fa-lg text-warning"></i>
                                <p class="mb-0">https://mdbootstrap.com</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                <p class="mb-0">@mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4 col-box">
                    <h5 class="card-header text-color-1 card-title-issue-detatils">আবেদনকারীর যোগাযোগের তথ্য</h5>
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
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                </p>
                                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                </p>
                                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection