@extends('admin.layouts.app')

@section('content')


<form action="{{url('mahasiswa/update')}}" method="post">
	<input type="hidden" name="id" value="{{$mahasiswa->id}}">
	Nama depan		: <input class="form-control" type="text" name="first_name" value="{{$mahasiswa->first_name}}">  
	Nama belakang	: <input class="form-control" type="text" name="last_name" value="{{$mahasiswa->last_name}}" >
	Email 			: <input class="form-control" type="email" name="email" value="{{$mahasiswa->email}}">
	Password 		: <input class="form-control" type="password" name="password" value="{{$mahasiswa->password}}" > 
					<br>
	Jenis kelamin	: <input type="radio" name="jenis_kelamin" value="L" {{($mahasiswa->jenis_kelamin == 'L') ? 'checked' : ''}} > Laki - Laki 
					  <input type="radio" name="jenis_kelamin" value="P" {{($mahasiswa->jenis_kelamin == 'P') ? 'checked' : ''}}  >Perempuan 
					 <br>
					 <br>
	Alamat			: <input class="form-control" type="textarea" name="alamat" value="{{$mahasiswa->alamat}}"> 
	Tanggal lahir	: <input class="form-control" type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" >
	Agama			: <input class="form-control" type="text" name="agama_id" value="{{$mahasiswa->agama_id}}" >


	{{csrf_field()}}
	<br>
	<button type="submit" class="btn btn-primary btn-block btn-flat" >UPDATE</button>

@endsection
