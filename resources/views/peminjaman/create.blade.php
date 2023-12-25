@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h1 class="h4 mb-0">Tambah Peminjaman Baru</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="no_peminjaman">No Peminjaman</label>
                                <input type="text" name="no_peminjaman" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="books_id">Book ID</label>
                                <input type="text" name="books_id" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="pengunjung_id">Pengunjung ID</label>
                                <input type="text" name="pengunjung_id" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="pegawai_id">Pegawai ID</label>
                                <input type="text" name="pegawai_id" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
