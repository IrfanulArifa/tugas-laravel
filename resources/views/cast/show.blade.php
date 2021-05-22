@extends('adminlte.master');

@section('content')
    <div class="card">
        <div class="card-body table-responsive p-0 ml-3 mt-3 ">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> {{$casts->id}}</td>
                        <td> {{$casts->nama}} </td>
                        <td> {{$casts->umur}} </td>
                        <td> {{$casts->bio}} </td>
                    </tr>
                </tbody>
              </table>
        </div>
    </div>
@endsection