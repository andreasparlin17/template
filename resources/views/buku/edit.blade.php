@extends('layout/layout')

@section('konten')
<div class="container mt-5">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
@else
    
@endif


    <div class="card">
    <div class="card-body">
        <form action="{{ '/buku/'.$data->judul_buku }}" method="POST">
            @csrf
            @method('PUT')
         <div class="mb-3">
          <h1>Id: {{ $data->id}}</h1>  
        </div>   
          <div class="mb-1">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input value="{{ $data->judul_buku}}" type="text" class="form-control" name="judul_buku" id="judul_buku">
            </div>
          <div class="mb-1">
            <label for="id_kategori" class="form-label">kategori</label>
            <input value="{{ $data->id_kategori}}" type="text" class="form-control" name="id_kategori" id="id_kategori">
            </div>
          <div class="mb-1">
            <label for="id_penerbit" class="form-label">id_penerbit</label>
            <input value="{{ $data->id_penerbit}}" type="text" class="form-control" name="id_penerbit" id="id_penerbit">
            </div>
          <div class="mb-1">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input value="{{ $data->pengarang}}" type="text" class="form-control" name="pengarang" id="pengarang">
            </div>
          <div class="mb-1">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input value="{{ $data->tahun_terbit}}" type="text" class="form-control" name="tahun_terbit" id="tahun_terbit">
            </div>
          <div class="mb-1">
            <label for="isbn" class="form-label">isbn</label>
            <input value="{{ $data->isbn}}" type="text" class="form-control" name="isbn" id="isbn">
            </div>
          <div class="mb-1">
            <label for="j_buku_baik" class="form-label">Buku Baik</label>
            <input value="{{ $data->j_buku_baik}}" type="text" class="form-control" name="j_buku_baik" id="j_buku_baik">
            </div>
          <div class="mb-1">
            <label for="Buku Rusak" class="form-label">Buku Rusak</label>
            <input value="{{ $data->j_buku_rusak}}" type="text" class="form-control" name="j_buku_rusak" id="j_buku_rusak">
            </div>
          <button type="submit" class="btn btn-primary float-end mt-1 ">Update</button>
        </form>
    </div>
    </div>    
</div>
@endsection