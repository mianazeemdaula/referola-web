<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampainController extends Controller
{
    public function index()
    {
        return response()->json(['data' =>  Campaign::with(['user'])->get()]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'campaign_type_id' => 'required',
            'content' => 'required',
            'user_share' => 'required',
            'friend_share' => 'required',
            'terms_and_condition' => 'required'
        ]);
        $user = auth()->user();
        $seller = $user->user_type_id == 4 ? $user->seller : $user->sellers[0];
        $campain = new  Campaign();
        $campain->user_id = $user->id;
        $campain->seller_id = $seller->id;
        $campain->campaign_type_id = $request->type;
        $campain->name = $request->name;
        $campain->description = $request->description;
        $campain->content = $request->content;
        $campain->user_share = $request->user_share;
        $campain->friend_share = $request->friend_share;
        $campain->terms_and_condition = $request->terms_and_condition;
        $campain->save();
        return response()->json(['data' =>  $campain]);
    }
}
