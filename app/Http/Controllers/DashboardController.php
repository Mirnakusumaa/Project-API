<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\DetailOrder;
use App\Service;
use App\DataTables\StatusDataTable;
use DB;
// use App\Http\Controllers\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StatusDataTable $status)
    {
        $title= 'Status';
        // $link = route('barang.create');
        return $status->render('masterdata.table',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order= $request->only(['nama','alamat','no_telp','keterangan','ongkir']);
        $order['id_user']=Auth::user()->id_user;
        $order['status']='Belum Dibayar';
        $order['total_harga']=Service::find($request->jenis_layanan)->harga*$request->jml_sepatu+$request->ongkir;
        $info = Order::insertGetId($order);

        $detail= new DetailOrder;
        $detail->id_order=$info;
        $detail->id_service=$request->jenis_layanan;
        $detail->jumlah_sepatu=$request->jml_sepatu;
        $detail->warna=$request->warna;
        $detail->save();
        
        return redirect('konfirmasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function show()
    {
        $tampil = DB::table('detail_orders')
                ->join('orders', 'detail_orders.id_order', '=', 'orders.id_order')
                ->join('services', 'detail_orders.id_service', '=', 'services.id_service')
                ->select('detail_orders.*','orders.nama','orders.alamat','orders.no_telp','orders.total_harga','orders.keterangan','orders.ongkir','services.jenis_layanan','services.harga')
                ->get()->last();
        return view('masterdata.konfirmasi', compact('tampil'));
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
        //
    }
}
