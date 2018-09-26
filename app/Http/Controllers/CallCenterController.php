<?php

namespace App\Http\Controllers;

use App\farmerLoan;
use App\farmerProduct;
use App\order;
use Illuminate\Http\Request;

class CallCenterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listFarmerLoans()
    {

        return view('pages.callCenter.listFarmerLoans')->with([
            'farmerLoans' => \App\farmerLoan::get(),
        ]);
    }

    public function deleteFarmerLoan($id)
    {
        $listFarmerLoan = farmerLoan::find($id);
        $listFarmerLoan->delete();
        return redirect('listFarmerLoans');
    }

    public function listFarmerProduct()
    {

        return view('pages.callCenter.listFarmerProduct')->with([
            'farmerProducts' => \App\farmerProduct::get(),
        ]);
    }

    public function deleteFarmerProduct($id)
    {
        $listFarmerLoan = farmerProduct::find($id);
        $listFarmerLoan->delete();
        return redirect('listFarmerProduct');
    }

    public function listDealerOrder()
    {
        return view('pages.callCenter.listDealerOrders')->with([
            'orders' => \App\order::get(),
        ]);
    }

    public function deleteDealerOrder($id)
    {
        $order = order::find($id);
        $order->delete();
        return redirect('listDealerOrder');
    }
}
