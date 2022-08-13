<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SellerProfile;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'logo' => 'required',
            'name' => 'required',
            'about' => 'required',
            'email' => 'required',
            'tax_id' => 'required',
            'phone_no' => 'required',
            'website_url' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'is_license' => 'required',
            'is_home_based' => 'required',
            'is_bonded' => 'required',
            'is_insured' => 'required',
        ]);
        $userId = auth()->id();
        return response()->json($request->all());
        $seller = new  SellerProfile;
        $seller->user_id = $userId;
        $seller->logo = $request->logo;
        $seller->about = $request->about;
        $seller->name = $request->business_name;
        $seller->email = $request->business_email;
        $seller->phone_no = $request->phone_no;
        $seller->website_url = $request->website_url;
        $seller->address = $request->address;
        $seller->zipcode = $request->zipcode;
        $seller->city = $request->city;
        $seller->state = $request->state;
        $seller->tax_id = $request->tax_id;
        $seller->country = $request->country;
        $seller->is_license = $request->is_license;
        $seller->is_home_based = $request->is_home_based;
        $seller->is_bonded = $request->is_bonded;
        $seller->is_insured = $request->is_insured;
        $seller->save();
        return response()->json(['data' =>  $seller]);
    }

    public function show($id)
    {
        return response()->json(['data' =>  SellerProfile::with(['user'])->where('id', $id)->first()]);
    }
}
