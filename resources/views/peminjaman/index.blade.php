@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h1>Daftar Peminjaman</h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">Tambah Peminjaman Baru</a>
            </div>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Book ID</th>
                        <th scope="col" class="text-center">Pengunjung ID</th>
                        <th scope="col" class="text-center">Pegawai ID</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peminjamans as $peminjaman)
                        <tr>
                            <td class="text-center">{{ $peminjaman->no_peminjaman }}</td>
                            <td class="text-center">{{ $peminjaman->books_id }}</td>
                            <td class="text-center">{{ $peminjaman->pengunjung_id }}</td>
                            <td class="text-center">{{ $peminjaman->pegawai_id }}</td>
                            <td class="text-center">{{ $peminjaman->status }}</td>
                            <td class="text-center">
                                <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
