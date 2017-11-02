@extends('student.layouts.main')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.min.css') }}">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h2>Create new student info</h2>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form method="post" action="{{ route('student.index') }}" class="form-horizontal">
        <div class="form-group">
          <label for="nameTxt" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nameTxt" placeholder="Your name" name="name" value="{{ old('name') }}">
          </div>
        </div>
        <div class="form-group">
          <label for="birthdayTxt" class="col-sm-2 control-label">Date of birth</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="text" class="form-control datepicker" id="birthdayTxt" name="birthday" value="{{ old('birthday') }}">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="addressTxt" class="col-sm-2 control-label">Address</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="addressTxt" placeholder="Your address" name="address" value="{{ old('address') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="classTxt" class="col-sm-2 control-label">Class</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="classTxt" placeholder="" name="class" value="{{ old('class') }}">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
  <script>
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd'
    });
  </script>
@endsection