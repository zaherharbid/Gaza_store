<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Payment;
use App\Models\Setting;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function index(): View
    {
        return view('dashboard.index');
    }
    function settings()
    {
        return view('dashboard.settings');
    }
    function settings_update(Request $request)
    {
        $data = $request->except('_token', '_method', 'logo');
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('uploads', 'public');
            $data['logo'] = $path;
        }
        if ($request->hasFile('about_image')) {
            $path = $request->file('about_image')->store('uploads', 'public');
            $data['about_image'] = $path;
        }
        foreach ($data as $key => $val) {
            Setting::updateOrCreate([
                'key' => $key
            ], [
                'value' => $val
            ]);
        }
        return redirect()
            ->back()
            ->with('msg', 'Settings updated successfully')
            ->with('type', 'success');
    }

    function payments()
    {
        $payments = Payment::latest()->paginate(10);

        return view('dashboard.payments', compact('payments'));
    }

    function payments_details($id)
    {
        $payment = Payment::findOrFail($id);

        return view('dashboard.payments_details', compact('payment'));
    }
}
