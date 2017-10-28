@extends('student.layouts.main')

@section('styles')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href={{asset('css/bootstrap-datepicker3.min.css')}}>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h2>Update student info</h2>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {!! Form::model(
        $student,
        [
          'method' => 'PUT',
          'action'=> ['StudentController@update', $student->id],
          'class'=> 'form-horizontal'
        ]
      ) !!}

      <div class="form-group">
        <label for="name-txt" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name-txt" placeholder="Your name" name="name" value="{{$student->name}}">
        </div>
      </div>
      <div class="form-group">
        <label for="dob-txt" class="col-sm-2 control-label">Date of birth</label>
        <div class="col-sm-10">
          <div class="input-group">
            <input type="text" class="form-control datepicker" id="dob-txt" name="DOB" value="{{$student->DOB}}">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="address-txt" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="address-txt" placeholder="Your address" name="address"
                 value="{{$student->address}}">
        </div>
      </div>

      <div class="form-group">
        <label for="class-txt" class="col-sm-2 control-label">Class</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="class-txt" placeholder="" name="class" value="{{$student->class}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>

      {!! Form::close() !!}
    </div>
  </div>
@endsection

@section('scripts')
  <script src={{asset('js/bootstrap-datepicker.min.js')}}></script>
  <script>
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
    })
  </script>
@endsection