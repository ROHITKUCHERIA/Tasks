<?php

namespace App\Http\Controllers;

use App\Models\Role;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_devices = Device::all();
        // echo '<pre>';
        // print_r($all_devices);
        $role_All = Role::all();
        // echo '<pre>';
        // print_r($role_All);

        // return view('crud.index', [
        //     'devices' => $all_devices,
        //     'role' => $role_All,
        // ]);

        return view('crud.index', compact('all_devices', 'role_All'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('crud.create');
        $all_devices = Device::all();
        $role_All = Role::all();
        return view('crud.create', compact('all_devices', 'role_All'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print_r($request->all());
        // echo $request->name;

        $device = new Device();
        $device->name = $request->name;
        $device->email = $request->email;
        $device->password = $request->password;
        $device->role = $request->role;
        $device->save();

        $request->session()->flash('success', 'User Successfully Created !');

        return  redirect('device');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        // echo "welcome to edit method";

        return view('crud.edit', [
            "device" => $device

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $device = Device::find($id);

        $device->name = $request->name;
        $device->email = $request->email;
        $device->role = $request->role;

        $device->save();

        $request->session()->flash('success', 'User Successfully Updated !');
        return redirect("device");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        // echo "Welcome to destory method";

        // print_r($device);

        $device->delete();
        return redirect()->route('device.index')->with("success", "User Successfully Deleted");
    }
    public function role()
    {
        return view('crud.role');
    }
}