@extends('template.main')

@section('contain')
    <div class="container-fluid px-5">
        <h2 class="text-center text-decoration-underline my-3">Service Center</h2>
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12 alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped px-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Jenis Servis</th>
                    <th scope="col">Waktu Servis</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $servis)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $servis->nama }}</td>
                        <td>{{ $servis->jenis_barang }}</td>
                        <td>{{ $servis->jenis_servis }}</td>
                        <td>{{ $servis->tanggal_servis }}</td>
                        @if ($servis->status === 0)
                            <td><span class="btn btn-warning">Sedang Dikerjakan</span></td>
                        @else
                            <td><span class="btn btn-success">Selesai</span></td>
                        @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
