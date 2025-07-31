<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::latest()->paginate(10);
        return view('dashboard.types.index', compact('types'));
    }

    public function create()
    {
        return view('dashboard.types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);

        $path = $request->file('image')->store('uploads', 'public');

        Type::create([
            'name' => $request->name,
            'image' => $path
        ]);

        return redirect()
            ->route('dashboard.types.index')
            ->with('msg', 'Type Added successfully')
            ->with('alert-type', 'success');
    }

    public function edit(Type $type)
    {
        return view('dashboard.types.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $request->validate([
            'name' => 'required|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($type->image);
            $path = $request->file('image')->store('uploads', 'public');
        }

        $type->update([
            'name' => $request->name,
            'image' => $path ?? $type->image
        ]);

        return redirect()
            ->route('dashboard.types.index')
            ->with('msg', 'Type Updated successfully')
            ->with('type', 'info');
    }

    public function destroy(Type $type)
    {
        if ($type->image && Storage::disk('public')->exists($type->image)) {
            Storage::disk('public')->delete($type->image);
        }

        $type->delete();

        return redirect()
            ->route('dashboard.types.index')
            ->with('msg', 'Type Deleted Successfully')
            ->with('type', 'danger');
    }
}
