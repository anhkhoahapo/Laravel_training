@extends('student.layouts.main')

@section('styles')
  <style>
    .actions-head {
      text-align: end;
    }

    .new-btn {
      margin-top: 30px;
    }

    .pagination {
      text-align: center;
    }
  </style>
@endsection

@section('content')

  <div class="container">
    <div class="row">
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
      @endif
      <div class="col-md-6">
        <h2>Student list</h2>
        <p>Dummy students</p>
      </div>
      <div class="actions-head col-md-6">
        <a class="new-btn btn btn-primary" href="{{ route('student.create') }}">+ New</a>
      </div>
    </div>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date of birth</th>
        <th>Address</th>
        <th>Class</th>
        <th></th>
      </tr>
      </thead>
      <tbody>

      @foreach($students as $student)
      <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->birthday }}</td>
        <td>{{ $student->address }}</td>
        <td>{{ $student->class }}</td>
        <td></td>
      </tr>
      @endforeach

      </tbody>
    </table>
    <div class="pagination col-md-12">
      {{ $students->links() }}
    </div>
  </div>

@endsection