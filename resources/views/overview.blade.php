@extends('dashboard-layout.user-dashboard')
@section('content')


<!-- Cards start -->
<div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
        <div class="col pt-3">
          <div class="card card-parent">
            <div class="card-body">
              <h5 class="card-title lead">মোট ব্যবহারকারীর সংখ্যা</h5>
              <div class="d-flex justify-content-between align-items-center">
                <div><i class="fa-solid fa-users fa-4x text-info"></i></div>
                <div>
                  <h1>2390</h1>
                  <a href="#" class="text-decoration-none see-details-btn">বিস্তারিত দেখুন</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col pt-3">
          <div class="card card-parent">
            <div class="card-body">
              <h5 class="card-title lead">নতুন অভিযোগের সংখ্যা</h5>
              <div class="d-flex justify-content-between align-items-center">
                <div><i class="fa-solid fa-file-circle-question fa-4x text-success"></i></div>
                <div>
                  <h1>5603</h1>
                  <a href="#" class="text-decoration-none see-details-btn">বিস্তারিত দেখুন</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col pt-3">
          <div class="card card-parent">
            <div class="card-body">
              <h5 class="card-title lead">অভিযোগ সমাধান হয়েছে</h5>
              <div class="d-flex justify-content-between align-items-center">
                <div><i class="fa-solid fa-file-circle-check fa-4x text-primary"></i></div>
                <div>
                  <h1>4594</h1>
                  <a href="#" class="text-decoration-none see-details-btn">বিস্তারিত দেখুন</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col pt-3">
          <div class="card card-parent">
            <div class="card-body">
              <h5 class="card-title lead">অভিযোগ বাতিল হয়েছে</h5>
              <div class="d-flex justify-content-between align-items-center">
                <div><i class="fa-solid fa-file-circle-xmark fa-4x text-warning"></i></div>
                <div>
                  <h1>890</h1>
                  <a href="#" class="text-decoration-none see-details-btn">বিস্তারিত</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Cards end -->


@endsection