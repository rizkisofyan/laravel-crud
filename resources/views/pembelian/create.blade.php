@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card">
                    <div class="card-header">
                        Data Pembelian
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pembelian.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="form-label">Nama Pembeli</div>
                                <input type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" name="nama_pembeli" required>
                                @error('nama_pembeli')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Pembelian</label>
                                <input type="date" name="tanggal_pembelian" class="form-control @error('tanggal_pembelian') is-invalid @enderror" >
                                @error('tanggal_pembelian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" required>
                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga Satuan</label>
                                <input type="number" class="form-control @error('harga_satuan') is-invalid @enderror" name="harga_satuan" required>
                                @error('harga_satuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Barang</label>
                                <input type="number" class="form-control @error('jumlah_barang') is-invalid @enderror" name="jumlah_barang" required>
                                @error('jumlah_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grip gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
