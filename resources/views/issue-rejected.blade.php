@extends('dashboard-layout.user-dashboard')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="user-table p-3">
                <table class="table table-sm caption-top text-center table-responsive pt-2 row-border stripe" id="rejectedIssueListTable">
                    <thead class="">
                        <tr class="">
                            <th scope="col">সিরিয়াল</th>
                            <th scope="col">আবেদনকারী</th>
                            <th scope="col">টাইটেল</th>
                            <th scope="col">বাতিল হয়েছে</th>
                            <th scope="col">সংযুক্তি</th>
                            <th scope="col">বিস্তারিত</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 0; ?>
                        @foreach($data as $issue)
                        <tr>
                            <td>{{$id=$id+1;}}</td>
                            <td>{{$issue->name}}</td>
                            <td>{{$issue->title}}</td>
                            <td>{{$issue->updated_at}}</td>
                            <td>
                            @if (isset($issue->file_path))
                            <a class="download-btn" href="{{asset($issue->file_path)}}" download>
                            <i class="fa-solid fa-file-arrow-down pe-2"></i>Download
                                </a>
                            @endif
                            @if (!isset($issue->file_path))
                                <span>Not Found</span>
                            @endif
                            </td>
                            <td>
                                <div>
                                    <a href="#" class="details-btn"><i class="fa-regular fa-eye pe-2"></i>বিস্তারিত</a>
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
    $('#rejectedIssueListTable').DataTable();
} );
</script>


@endsection