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
                            <div class="form-group">
                                <label for="basicInput">Nama Produk</label>
                                <input type="text" name="nama" class="form-control" id="basicInput"
                                    placeholder="Masukan Nama Produk">
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="helpInputTop">
                            </div>

                            <div class="form-group">
                                <label for="helperText">Jumlah</label>
                                <input type="text" id="helperText" class="form-control" name="jumlah" placeholder="0">
                                <p><small class="text-muted"></small>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="helperText">Harga</label>
                                <p><small class="text-muted">(RP)</small>
                                <input type="text" id="helperText" class="form-control" name="harga" placeholder="1000">
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
