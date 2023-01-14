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
                        <a href="{{ route('invoice.create') }}" class="btn btn-primary">Input</a>
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <th>id_invoice</th>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th width="30%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoiceData as $data)
                                        <tr>
                                            <td>{{ $invoice->id }}</td>
                                            <td>{{$data->product->nama}}</td>
                                            <td>Rp. {{$data->product->harga}}</td>
                                            <td>
                                                <a href="{{ route('invoice.show',$invoice->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <a onclick="confirm('Apakah anda ingin menghapus data ini?')" href="{{url('invoice/data/delete/'.$data->id)}}" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td>Total </td>
                                        <td>Rp. {{$invoice->product->sum('harga')}}</td>
                                        <td></td>
                                    </tr>
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
