<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class GeneralUser extends Controller
{
    public function update(Request $request, $id)
    {
        $user = User::find($id);


        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'country' => 'required',

            'governorate' => 'required',
            'city' => 'required',
        ]);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->governorate = $request->governorate;
        $user->city = $request->city;
        if ($user->password) {
            $user->password = Hash::make($request->password);
        }
        $user->update();

        $request->session()->flash('success', 'تم  تعديل بيانات  المستخدم بنجاح!');
        return redirect('/profile');
    }

}
