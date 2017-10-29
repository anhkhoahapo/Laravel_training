@extends('student.layouts.main')

@section('styles')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href={{asset('css/bootstrap-datepicker3.min.css')}}>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form method="post" action={{url('student')}} class="form-horizontal">
        <div class="form-group">
          <label for="name-txt" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name-txt" placeholder="Your name" name="name-txt">
          </div>
        </div>
        <div class="form-group">
          <label for="dob-txt" class="col-sm-2 control-label">Date of birth</label>
          <div class="col-sm-10">
            <div class="input-group date" data-provide="datepicker">
              <input type="text" class="form-control" id="dob-txt" name="dob-txt">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="address-txt" class="col-sm-2 control-label">Address</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="address-txt" placeholder="Your address" name="address-txt">
          </div>
        </div>

        <div class="form-group">
          <label for="class-txt" class="col-sm-2 control-label">Class</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="class-txt" placeholder="" name="class-txt">
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
  <script src={{asset('js/bootstrap-datepicker.min.js')}}></script>
  <script>
    $('.datepicker').datepicker({
      format: 'yyyy/mm/dd',
      startDate: '-3d'
    });
  </script>
@endsection