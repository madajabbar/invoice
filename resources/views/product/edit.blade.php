@extends('layouts.app2')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <form action="{{route('product.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="kode" required value="{{$product->kode}}">
                            <div class="form-group">
                                <label for="basicInput">Nama Produk</label>
                                <input type="text" name="nama" class="form-control" id="basicInput"
                                    value="{{$product->nama}}" required>
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Keterangan</label>
                                <input type="text" class="form-control" value="{{$product->keterangan}}" name="keterangan" id="helpInputTop" required>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Jumlah</label>
                                <input type="text" id="helperText" class="form-control" value="{{$product->jumlah}}" name="jumlah" placeholder="0" required>
                                <p><small class="text-muted"></small>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="helperText">Harga</label>
                                <p><small class="text-muted">(RP)</small>
                                <input type="text" id="helperText" class="form-control" value="{{$product->harga}}" name="harga" placeholder="1000" required>
                                </p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
