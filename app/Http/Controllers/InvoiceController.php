<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceData;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['invoice'] = Invoice::all();
        return view('invoice.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['product'] = Product::all();
        return view('invoice.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last = Invoice::latest()->first();
        // dd($last);
        $last = substr($last->id,-1);
        $invoice = Invoice::Create(
            [
                'id'=> 'iv'.Carbon::now()->format('ym').(int)$last+1
            ]
        );
        // dd($last);
        $count = Count($request->product_id);
        for ($i=0; $i < $count; $i++) {
            $data = InvoiceData::updateOrCreate(
                ['id' => $request->id],
                [
                    'product_kode' => $request->product_id[$i],
                    'invoice_id' => 'iv'.Carbon::now()->format('ym').(int)$last+1
                ],
            );
         }
         return redirect()->route('invoice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['invoice'] = Invoice::find($id);
        $data['invoiceData'] = InvoiceData::where('invoice_id',$id)->get();
        return view('invoice.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Invoice::find($id)->delete();
        return redirect()->back();
    }
    public function delete($id)
    {
        InvoiceData::find($id)->delete();
        return redirect()->back();
    }

}
