@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div>
            <a class="btn btn-primary" href="{{ route('all-issues') }}">সকল অভিযোগ ডাউনলোড করুন</a>
                <table class="table table-striped">
                    <thead class="bg-success text-white">
                        <tr>
                            <th scope="col">সিরিয়াল</th>
                            <th scope="col">আবেদনকারীর নাম</th>
                            <th scope="col">টাইটেল</th>
                            <th scope="col">বিস্তারিত বিবরণ</th>
                            <th scope="col">ইস্যু তৈরী হয়েছে</th>
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
                                    <button type="button" class="btn btn-success">কমপ্লিট</button>
                                    <button type="button" class="btn btn-danger">বাতিল</button>
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
@endsection