<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellerUserController extends Controller
{

    public function index()
    {
        $data = request()->user()->seller->users;
        return response()->json(['data' => $data]);
    }
    public function register(Request $request)
    {
        try {
            DB::beginTransaction();
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required',
            ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->user_type_id = 6;
            $user->save();
            $s = request()->user()->seller->users()->attach($user->id);
            DB::commit();
            return response()->json(['data' => $user]);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->sellers()->detach();
        $user->delete();
        return response()->json(['data' => 'Successfully deleted']);
    }
}
