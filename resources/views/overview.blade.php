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
            <h1>{{$totalUser}}</h1>
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
            <h1>{{$totalNewIssue}}</h1>
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
            <h1>{{$totalSolvedIssue}}</h1>
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
            <h1>{{$totalRejectedIssue}}</h1>
            <a href="#" class="text-decoration-none see-details-btn">বিস্তারিত দেখুন</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Cards end -->

<!--Table & Line Chart Start-->

<div class="row d-flex justify-content-between py-3 px-3 gap-4">
  <div class="col user-table">

    <table class="table table-sm caption-top text-center">
      <caption class="lead user-table-caption ps-2">সর্বশেষ নিবন্ধিত ব্যবহারকারীর তালিকা</caption>
      <thead>
        <tr>
          <th scope="col">সিরিয়াল</th>
          <th scope="col">নাম</th>
          <th scope="col">ইমেইল</th>
          <th scope="col">সময়</th>
        </tr>
      </thead>
      <tbody>
        <?php $sl = 0; ?>
        @foreach($recentRegisteredUser as $recentUser)
        <tr>
          <td>{{$sl=$sl+1}}</td>
          <td>{{$recentUser->name}}</td>
          <td>{{$recentUser->email}}</td>
          <td>{{$recentUser->created_at}}</td>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="col-5 transaction-chart">
    <div class="p-2">
      <h3 class="lead user-table-caption pt-1">মাস অনুযায়ী নিবন্ধিত ইউজার</h3>
      <canvas id="myChart" height="100px"></canvas>
      <script type="text/javascript">
  
    var monthWiseIssuesLabels =  {{ Js::from($monthWiseIssuesLabels) }};
    var monthWiseIssuesData =  {{ Js::from($monthWiseIssuesData) }};
  
    const data = {
        labels: monthWiseIssuesLabels,
        datasets: [{
            label: 'নিবন্ধিত হয়েছে',
            backgroundColor: {{ Js::from($monthWiseIssuesColours) }},
            borderColor: 'rgb(255, 99, 132)',
            data: monthWiseIssuesData,
        }]
    };
  
    const config = {
        type: 'bar',
        data: data,
        options: {
          plugins: {
          legend: {
            labels: {
              color: "#e5e7ea",
            }
          }
        },
        scales: {
          y: {
            ticks: {
              color: "#e5e7ea",
              font: {
                size: 11,
              },
              beginAtZero: true
            }
          },
          x: {
            ticks: {
              color: "#e5e7ea",
              font: {
                size: 11
              },
              beginAtZero: true
            }
          }
        }
        }
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
  
</script>

    </div>
  </div>
</div>

<!--Table & Line Chart End-->


@endsection