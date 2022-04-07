@extends('master')
@push('title')
  Dashboard
@endpush

@section('body')
  <div class="container">
    <div class="row">
      @include('parital/sidenav')
      <div class="col-md-8">
          @include('parital/message')
          @include('parital/successmesssage')
          <div class="row">
            <h3>Dashboard</h3>
            <hr/>
          </div>
      </div>
    </div>
  </div>
@endsection