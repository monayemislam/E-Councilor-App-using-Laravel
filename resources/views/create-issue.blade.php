@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <a href="{{route('submitted-issue')}}" class="btn btn-primary my-4">আগের অভিযোগগুলো দেখতে ক্লিক করুন</a>
            <div>
                <form method="post" action="{{route('submit-issue')}}">
                @csrf 
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">অভিযোগের টাইটেল</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">অভিযোগের বিস্তারিত বর্ণনা দিন</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">অভিযোগ দাখিল করুন</button>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection