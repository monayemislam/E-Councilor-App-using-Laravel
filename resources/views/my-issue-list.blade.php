@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
        <a href="{{route('create-issue')}}" class="btn btn-primary my-4">নতুন অভিযোগ জানাতে ক্লিক করুন</a>
            <div>
                
                <table class="table table-striped" id="myListTable">
                    <thead class="bg-success text-white">
                        <tr>
                            <th scope="col">সিরিয়াল</th>
                            <th scope="col">টাইটেল</th>
                            <th scope="col">বিস্তারিত বিবরণ</th>
                            <th scope="col">ইস্যু তৈরী হয়েছে</th>
                            <th scope="col">ইস্যু আপডেট হয়েছে</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id=0; ?>
                        @foreach($data as $issue)
                        <tr>
                            <td>{{$id=$id+1;}}</td>
                            <td>{{$issue->title}}</td>
                            <td>{{$issue->description}}</td>
                            <td>{{$issue->created_at->toFormattedDateString()}}</td>
                            <td>{{$issue->updated_at->toFormattedDateString()}}</td>
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
    $('#myListTable').DataTable();
} );
</script>
@endsection