@extends('layouts.app2')

@section('content')
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table with outer spacing</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the most basic table up, here’s how
                                <code>.table</code>-based tables look in Bootstrap. You can use any example
                                of below table for your table and it can be use with any type of bootstrap
                                tables.
                            </p>
                            <a href="{{ route('product.create') }}" class="btn btn-primary">Input</a>
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $data)
                                            <tr>
                                                <td>{{ $data->kode }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->harga }}</td>
                                                <td>{{ $data->jumlah }}</td>
                                                <td>{{ $data->keterangan }}</td>
                                                <td>
                                                    <a href="{{ route('product.edit', $data->kode) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a onclick="confirm('Apakah anda ingin menghapus data ini?')" href="{{url('product/delete/'.$data->kode)}}" class="btn btn-danger">Hapus</a>
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
    </section>
@endsection
