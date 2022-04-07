@extends('master')
@push('title')
  Category
@endpush

@section('body')
  <div class="container">
    <div class="row">
       @include('parital/sidenav')
      <div class="col-md-8">
          @include('parital/message')
          @include('parital/successmesssage')
          <div class="row">
            <h3>Category</h3>
            <hr/>
            <div class="col-md-12">
                <form action="{{ route('category') }}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Ex.Sports">
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
          </div>
          <div class="row">
              <table class="table">
                <th>Name</th>
                <th>Action</th>
                <tbody>
                    @foreach($categories as $c)
                    <tr>
                        <td>{{$c->name}}</td>
                        <td>DEL</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
@endsection