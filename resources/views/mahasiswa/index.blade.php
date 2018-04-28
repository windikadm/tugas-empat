@extends('admin.layouts.app')

@section('content')
  <h3><a href="{{url('mahasiswa/create')}}" class="btn btn-primary">Add Mahasiswa</a></h3>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama depan</th>
                  <th>Nama belakang</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Tanggal lahir</th>
                  <th>Agama</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mahasiswa as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->first_name}}</td>
                  <td>{{$row->last_name}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->password}}</td>
                  <td>{{$row->jenis_kelamin}}</td>
                  <td>{{$row->alamat}}</td>
                  <td>{{$row->tanggal_lahir}}</td>
                  <td>{{$row->agama_id}}</td>
                  <td>
                    <a href="{{url('mahasiswa/show/'.$row->id)}}" class="btn btn-success btn-xs">Show</a>
                    <a href="{{url('mahasiswa/edit/'.$row->id)}}" class="btn btn-primary btn-xs">Edit</a>
                    <a href="{{url('mahasiswa/hapus/'.$row->id)}}" class="btn btn-danger btn-xs">Hapus</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>

@endsection
