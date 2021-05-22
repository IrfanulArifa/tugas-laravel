@extends('adminlte.master');

@section('content');
    <div class="ml-3 mr-3">
        <div class="card card-primary">
            <div class="card-header">
                    <h3 class="card-title">Edit Post No. {{$casts->id}}</h3>
            </div>
        </div>
        <form role="form" action="/cast" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value=" {{ old('nama',$casts->nama) }} " placeholder="Masukkan Nama">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Umur</label>
                    <input type="text" class="form-control" id="umur" name="umur" value=" {{ old('umur',$casts->umur) }} " placeholder="Masukkan Umur">
                    @error('umur')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputBio">Bio</label>
                    <textarea class="form-control" rows="3" id="bio" name="bio" value=" {{ old('bio',$casts->bio) }} " placeholder="Isi Biodata Anda.."></textarea>
                    @error('bio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    
@endsection