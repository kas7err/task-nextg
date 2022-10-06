<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function index()
    {
        $store = \DB::table('store')->select('key')->get();
        $keysList = $store->map(function($data) {
            $key = explode('_', $data->key);
            return end($key);
        });
        return view('store', ['keysList' => $keysList]);
    }


    public function create(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required',
        ]);

        $value = $request->input('value');
        $expires_at = $request->input('expires_at');
        \Cache::put($validated['key'], $value, $expires_at);
        return back();
    }


    public function show($key)
    {
        return view('key', ['result' => \Cache::get($key)]);
    }

    public function delete($key)
    {
        \Cache::pull($key);
        return back();
    }
}
