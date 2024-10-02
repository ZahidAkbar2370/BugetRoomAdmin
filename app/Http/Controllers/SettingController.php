<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
 // show data
    public function index()
    {
        $allSettings = Setting::all();

        return view('admin.setting.view', compact('allSettings'));
    }

    public function create() {
        return view('admin.setting.create');
    }

    // inserted data
    public function storeSetting(Request $request)
    {
// data validation
    $request->validate([
    'title' => 'required|string|max:255',
    'value' => 'required|string|max:255',
    ]);

    // Create a new Category
    $setting = new Setting;
    $setting->title = $request->input('title');
    $setting->value = $request->input('value');
    $setting->save();
    return redirect('settings')->with('success', 'Settings created successfully.');
    }

    // edit data
public function editSetting($id){
    $allSettings = Setting::find($id);

    return view('admin.setting.edit',compact('allSettings'));

}

// update data
public function updateSetting(Request $request, $id){

    //data validation
    $request->validate([
        'title' => 'required|string|max:255',
        'value' => 'required|string|max:255',

    ]);

    $allSettings = Setting::find($id);

    $allSettings->title = $request->input('title');
    $allSettings->value = $request->input('value');
    $allSettings->save();

    return redirect('settings')->with('success', 'Setting updated successfully.');
}

}

