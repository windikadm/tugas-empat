@extends('admin.layouts.app')

@section('content')


<form action="{{url('mahasiswa/show')}}" method="post">

	Nama depan		: <input  class="form-control" type="text" name="first_name" value="{{$mahasiswa->first_name}}" disabled >  
	Nama belakang	: <input  class="form-control" type="text" name="last_name" value="{{$mahasiswa->last_name}}"  disabled > 
	Email 			: <input  class="form-control" type="email" name="email" value="{{$mahasiswa->email}}">
	Password 		: <input  class="form-control" type="password" name="password" value="{{$mahasiswa->password}}" disabled >
	Jenis kelamin	: <input  class="form-control" type="radio" name="jenis_kelamin" value="L" disabled {{($mahasiswa->jenis_kelamin == 'L') ? 'checked' : ''}} > Laki - Laki <br>
					  <input  class="form-control" type="radio" name="jenis_kelamin" value="P"  disabled {{($mahasiswa->jenis_kelamin == 'P') ? 'checked' : ''}}  >  Perempuan <br>
	Alamat			: <input  class="form-control" type="textarea" name="alamat" value="{{$mahasiswa->alamat}}" disabled >
	Tanggal lahir	: <input  class="form-control" type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" disabled  >
	Agama			: <input  class="form-control" type="text" name="agama_id" value="{{$mahasiswa->agama_id}}" disabled  >
	
</form>


@endsection