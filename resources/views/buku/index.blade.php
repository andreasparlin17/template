@extends('layout/layout')
@section('konten')
    <div class="container">
        <h1 style="text-align:center">table buku</h1>
        <a href="{{route('buku.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <table class="table" style="text-align: center">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>judul_buku</th>
                            <th>penerbit</th>
                            <th>pengarang</th>
                            <th>tahun_terbit</th>
                            <th>isbn</th>
                            <th>Jumlah buku baik</th>
                            <th>Jumlah buku rusak</th>
                            <th>Jumlah Buku</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $b)
                        <tr>
                            <td>{{$b->id}}</td>
                            <td>{{$b->judul_buku}}</td>
                            <td>{{$b->id_penerbit}}</td>
                            <td>{{$b->pengarang}}</td>
                            <td>{{$b->tahun_terbit}}</td>
                            <td>{{$b->isbn}}</td>
                            <td>{{$b->j_buku_baik}}</td>
                            <td>{{$b->j_buku_rusak}}</td>
                            {{-- <td>{{$b->id}}</td> --}}
                            <td>{{$b->count()}}</td>
                            <td>
                                <a href="{{url ('/buku/'.$b->judul_buku.'/edit')}}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{ '/buku/'.$b->judul_buku }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection