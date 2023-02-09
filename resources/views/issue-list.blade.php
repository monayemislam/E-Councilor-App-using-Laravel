@extends('dashboard-layout.user-dashboard')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="user-table p-3">
            <a class="common-btn my-2" href="{{ route('all-issues') }}">সকল অভিযোগ ডাউনলোড করুন</a>
                <table class="table table-sm caption-top text-center table-responsive pt-2" id="submittedIssueListTable">
                    <thead class="">
                        <tr class="">
                            <th scope="col">সিরিয়াল</th>
                            <th scope="col">আবেদনকারী</th>
                            <th scope="col">টাইটেল</th>
                            <th scope="col">বিবরণ</th>
                            <th scope="col">তৈরী হয়েছে</th>
                            <th scope="col">সংযুক্তি</th>
                            <th scope="col">স্ট্যাটাস</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 0; ?>
                        @foreach($data as $issue)
                        <tr>
                            <td>{{$id=$id+1;}}</td>
                            <td>{{$issue->name}}</td>
                            <td>{{$issue->title}}</td>
                            <td>{{$issue->description}}</td>
                            <td>{{$issue->created_at}}</td>
                            <td>
                            @if (isset($issue->file_path))
                                <a href="{{asset($issue->file_path)}}" download>
                                    Download
                                </a>
                            @endif
                            @if (!isset($issue->file_path))
                                <span>Not Found</span>
                            @endif
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <button type="button" class="btn btn-outline-success">কমপ্লিট</button>
                                    <button type="button" class="btn btn-outline-danger">বাতিল</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready( function () {
    $('#submittedIssueListTable').DataTable();
} );
</script>



<!-- <script>
    var table = $('#submittedIssueListTable').DataTable();
 
 new $.fn.dataTable.Buttons( table, {
     buttons: [
         'copy', 'excel', 'pdf'
     ]
 } );
</script> -->

@endsection