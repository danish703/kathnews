@extends('master')
@push('title')
  Signup
@endpush

@section('body')
  <div class="container">
      <div class="row justify-content-md-center">
         <div class="column col-md-6">
             <div class="card" style="padding:10px">
                 @include('parital/message')
                 Signup 
                 <hr/>
                <form method="post" action="{{ route('signup') }}">
                   {{ csrf_field() }}
                    <div class="column col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputEmail" name="name" placeholder="Full Name" required="required" data-error="Email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                      <div class="column col-md-12">
                        <div class="form-group">
                            <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Email" required="required" data-error="Email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                      <div class="column col-md-12">
                        <div class="form-group">
                            <input type="password" class="form-control" id="InputEmail" name="password" placeholder="Password" required="required" data-error="Email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                      <div class="column col-md-12">
                        <div class="form-group">
                            <input type="password" class="form-control" id="InputEmail" name="password_confirmation" placeholder="Password Confirmation" required="required" data-error="Email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                      <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Signup</button><!-- Send Button -->
                </form>
             </div>
         </div>
      </div>
  </div>
@endsection