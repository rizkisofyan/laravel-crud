@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card">
                    <div class="card-header">
                        Data Pembelian
                        <a href="{{ route('pembelian.create') }}" class="btn btn-sm btn-primary" style="float: right !important;">
                            Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table_responsive">
                            <table id="dataTable" class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pembeli</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Satuan</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($pembelian as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_pembeli }}</td>
                                            <td>{{ $data->tanggal_pembelian }}</td>
                                            <td>{{ $data->nama_barang }}</td>
                                            <td>Rp. {{ number_format($data->harga_satuan, 2, ',', '.') }}</td>
                                            <td>{{ $data->jumlah_barang }}</td>
                                            <td>Rp. {{ number_format($data->total_harga, 2, ',', '.') }}</td>
                                            <td>
                                                <a href="{{ route('pembelian.edit', $data->id) }}" class="btn btn-sm btn-outline-success">
                                                    Edit
                                                </a> |
                                                <a href="{{ route('pembelian.show', $data->id) }}" class="btn btn-sm btn-outline-warning">
                                                    Show
                                                </a> |
                                                <form action="{{ route('pembelian.destroy', $data->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
