<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function edit()
    {
        $setting = Setting::first();
        return view('setting.edit',compact('setting'));

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {

        $request->validate([
            'address'=>'required',
            'shortaddress'=>'required',
            'email'=>'required',
            'phonenumber'=>'required',
            'twitter'=>'required',
            'facebook'=>'required',
            'linkdin'=>'required',
            'youtube'=>'required',
        ]);
        $setting = Setting::find($request->id);
        $setting->address = $request->address;
        $setting->shortaddress = $request->shortaddress;
        $setting->email = $request->email;
        $setting->phonenumber = $request->phonenumber;
        $setting->twitter = $request->twitter;
        $setting->facebook = $request->facebook;
        $setting->linkdin = $request->linkdin;
        $setting->youtube = $request->youtube;
        $setting->save();

        return redirect()->route('setting.edit')->with('success','setting updated successfully');
    }
}
