@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!====check and give success messege===>
                @if (Session::has('flash_messege')) 
                       <div class="alert alert-primary">{{ Session::get('flash_messege') }}</div> 
                @endif
                <h2 class="mt-4">Contact Us</h2>
              <form method="post" action="{{ route('contact.store') }}">
                  {{ csrf_field() }}

                  <div class="form-group">
                      <label>Full name:</label>
                      <input type="text" class="form-control" name="name" placeholder="ahmed">
                      <!====Validation===>
                      @if ($errors->has('name'))
                      <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                      @endif
                  </div>

                  <div class="form-group">
                      <label>E-mail</label>
                      <input type="text" class="form-control" name="email" placeholder="example@gmail.com">
                      <!====Validation===>
                      @if ($errors->has('email'))
                      <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                      @endif
                  </div>

                  <div class="form-group">
                      <label>messege:</label>
                      <textarea name="details" class="form-control" cols="30" rows="10" name="details"></textarea>
                      <!====Validation===>
                      @if ($errors->has('details'))
                      <small class="form-text invalid-feedback">{{ $errors->first('details') }}</small>
                      @endif
                  </div>

                  <button class="btn btn-lg btn-primary">Submit now</button>
              </form>
            </div>

            <div class="col-md-6">
              <h2>Contact Us</h2>
              <p>If you have any enquiries please send us a messege</p>
              <ul>
                <li>7815551</li>
                <li>9682212</li>
                <li>phopixofficial@gmail.com</li>
                <li>info.phopix@gmail.com</li>
              </ul>
            </div>
        </div>
    </div>
@endsection