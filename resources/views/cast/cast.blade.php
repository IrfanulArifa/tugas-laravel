@extends('adminlte.master');

@section('content')
    <div class="ml-3 mt-3">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data</h3>
        
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              
                @if (session('success'))
                    <div class="alert alert-success mb-3 mt-3 ml-3">
                        {{session('success')}}
                    </div>
                @endif
              
              <a class="btn btn-primary mb-3 mt-3 ml-3" href="/cast/create">Create Data</a>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($cast as $key => $casts)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$casts->nama}} </td>
                            <td> {{$casts->umur}} </td>
                            <td> {{$casts->bio}} </td>
                            <td>
                                <a href="/cast/{{$casts->id}}" class="btn btn-info btn-sm"> Tampilkan </a>
                                <a href="/cast/{{$casts->id}}/edit" class="btn btn-default btn-sm"> Edit </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" align="center">No Post</td>
                        </tr>
                    @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection