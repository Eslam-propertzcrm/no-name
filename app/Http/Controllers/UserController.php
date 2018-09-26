<?php

namespace App\Http\Controllers;

use App\DoneBuyProduct;
use App\DoneOrder;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin')->except('profile');
    }


    public function index()
    {
        return view('pages.users.index')->with([
            'users' => User::get(),
        ]);
    }


    public function create()
    {
        return view('pages.users.add');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'type' => 'required',
            'country' => 'required',
            'governorate' => 'required',
            'city' => 'required|confirmed',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->type = $request->type;
        $user->country = $request->country;
        $user->governorate = $request->governorate;
        $user->city = $request->city;
        $user->password = Hash::make($request->password);

        $request->session()->flash('success', 'تم اضافه المستخدم بنجاح!');
        $user->save();
        return redirect('/user');
    }


    public function show($id)
    {
        echo ' show ';
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.users.update')->with([
            'user' => $user,
        ]);
    }


    public function update(Request $request, User $user)
    {

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'type' => 'required',
            'governorate' => 'required',
            'city' => 'required',
        ]);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->governorate = $request->governorate;
        $user->city = $request->city;
        $user->type = $request->type;
        if ($user->password) {
            $user->password = Hash::make($request->password);
        }
        $user->update();

        $request->session()->flash('success', 'تم  تعديل بيانات  المستخدم بنجاح!');
        return redirect('/user/' . $user->id . '/edit/');
    }


    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('success', 'تم حذف المستخدم بنجاح!');
        return redirect('/user');
    }

    public function profile()
    {
        return view('pages.users.profile');
    }


    public function reportSale()
    {

        return view('pages.users.reportSale')->with([
            'orders' => \App\DoneOrder::get(),
        ]);

    }

    public function reportBuy()
    {

        return view('pages.users.reportBuy')->with([
            'buyProducts' => DoneBuyProduct::get(),
        ]);
    }

    public function deleteReportSale($id)
    {

        $reportSale = DoneOrder::find($id);
        $reportSale->delete();
        return redirect('reportSale');

    }

    public function deleteReportBuy($id)
    {
        $doneBuyProduct = DoneBuyProduct::find($id);
        $doneBuyProduct->delete();
        return redirect('reportBuy');

    }


}
