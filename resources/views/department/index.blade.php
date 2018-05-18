@extends('layouts.dashboard')

@section('content')

<div>
    <a href="{{ url('/department/create') }}" class='btn btn-primary'>Add Department</a>
    <section>
        <div class="panel panel-success">
            <div class="panel-heading">Departments</div>

                  <!-- Table -->
                  <table class="table">
                      <tr>
                          <th>#</th>
                          <th>Department</th>
                          <th>Description</th>
                          <th></th>
                      </tr>
                      <?php $count=1; ?>
                      
                      @foreach($departments as $key => $value)
                        <tr>
                          <td>{{ $count }}</td><td>{{ $value->d_name }}</td><td>{{ $value->d_description }}</td>
                        </tr>
                        {{ $count++ }}
                      @endforeach
                  </table>
                


        </div>
    </section>
</div>


@endsection