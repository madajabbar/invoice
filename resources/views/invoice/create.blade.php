@extends('layouts.app2')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/extensions/choices.js/public/assets/styles/choices.css') }}">
@endsection
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <form action="{{ route('invoice.store') }}" method="POST">
                            @csrf
                            <table class="table table-bordered" id="dynamicAddRemove">
                                <tr>
                                    <td>
                                        <select name="product_id[0]" class="form-select choices">
                                            @foreach ($product as $data)
                                                <option id="option" data-id={{$data->harga}} value="{{ $data->kode }}">{{ $data->nama }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <button type="button" name="add" id="dynamic-ar"
                                            class="btn btn-outline-primary">Tambah</button>
                                        </td>
                                </tr>
                            </table>
                            <p>Total Harga</p>
                            <p id="estimated_ammount">0</p>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-element-select.js') }}"></script>

    <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><select name="product_id[' + i +
                ']" class="form-select choices">@foreach($product as $data) <option value="{{ $data->kode }}">{{ $data->nama }}</option> @endforeach </select></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
        // $('.choices').each(function(){

        //     if(value.length != 0)
        //     {
        //       sum += parseFloat(value);
        //     }
        //   });
    </script>

@endsection
