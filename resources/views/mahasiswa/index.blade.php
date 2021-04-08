@extends('layout/main')

@section('title','about')

@section('container')
<div class="container">
    <div class="row">
            <div class="col 10 mt-3">
            <h1>Daftar Mahasiswa!</h1>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">no</th>
                    <th scope="col">nama</th>
                    <th scope="col">nrp</th>
                    <th scope="col">email</th>
                    <th scope="col">jurusan</th>
                    <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr>
                    <th scope="row">{{$loop -> iteration}}</th> <!--variabel loop, properti iteration untuk memberikan nomer sudah urutan keberapa, dokumentasi laravel bagian frondent, ada loop, foreach dsb -->
                    <td>{{$mhs -> nama}}</td>
                    <td>{{$mhs -> nrp}}</td>
                    <td>{{$mhs -> email}}</td>
                    <td>{{$mhs ->  jurusan}}</td>
                    <td>
                        <a href="" class="badge bg-success">edit</a>
                        <a href="" class="badge bg-danger">delete</a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
        </div>
    </div>
</div>
@endsection