@extends('master')
@push('title')
  Add News
@endpush

@section('body')
  <div class="container">
    <div class="row">
      @include('parital/sidenav')
      <div class="col-md-8">
          @include('parital/message')
          @include('parital/successmesssage')
          <div class="row">
            <h3>Add News</h3>
            <hr/>
             <div class="col-md-12">
                 <form action="{{ route('addNews') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Aa">
                    </div>
                    <div class="form-group">
                        <label for="">Post</label>
                        <textarea name="post" class="form-control" placeholder="Aa"></textarea>
                    </div>
                     <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info">Save</button>
                 </div>
                 </form>
             </div>
          </div>
      </div>
    </div>
  </div>
@endsection