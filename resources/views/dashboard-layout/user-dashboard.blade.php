@include('sweet::alert')
@include('dashboard-layout.header')






<div class="d-flex">
    @include('dashboard-layout.sidebar')
    <div class="content-wrapper px-3">
        @include('dashboard-layout.navbar')
        <div class="pt-3">
            @yield('content')
        </div>
    </div>
</div>






@extends('dashboard-layout.footer');