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
        <form action="{{route('buku.store')}}" method="POST">
            @csrf
          <div class="mb-1">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" name="judul_buku" id="judul_buku">
            </div>
          <div class="mb-1">
            <label for="id_kategori" class="form-label">kategori</label>
            <input type="text" class="form-control" name="id_kategori" id="id_kategori">
            </div>
          <div class="mb-1">
            <label for="id_penerbit" class="form-label">id_penerbit</label>
            <input type="text" class="form-control" name="id_penerbit" id="id_penerbit">
            </div>
          <div class="mb-1">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control" name="pengarang" id="pengarang">
            </div>
          <div class="mb-1">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit">
            </div>
          <div class="mb-1">
            <label for="isbn" class="form-label">isbn</label>
            <input type="text" class="form-control" name="isbn" id="isbn">
            </div>
          <div class="mb-1">
            <label for="j_buku_baik" class="form-label">Buku Baik</label>
            <input type="text" class="form-control" name="j_buku_baik" id="j_buku_baik">
            </div>
          <div class="mb-1">
            <label for="Buku Rusak" class="form-label">Buku Rusak</label>
            <input type="text" class="form-control" name="j_buku_rusak" id="j_buku_rusak">
            </div>
          <button type="submit" class="btn btn-primary float-end mt-1">Submit</button>
        </form>
    </div>
    </div>    
</div>
@endsection