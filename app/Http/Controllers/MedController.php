<?php

namespace App\Http\Controllers;

use App\Models\Med;
use Illuminate\Http\Request;

class MedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $meds = Med::filter()->orderBy('created_at', 'desc')->paginate(25);
        return view('meds.index', compact('meds'));
    }

    public function new()
    {
        return view('meds.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:meds,name',
            'type' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/meds/', $filename);
            $path = '/uploads/meds/' . $filename;
        } else {
            $path = '/assets/images/Profile.png';
        }

        Med::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect()->route('meds')->with('success', 'Medication created successfully!');
    }

    public function edit(Med $med)
    {
        return view('meds.edit', compact('med'));
    }

    public function update(Med $med, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/meds/', $filename);
            $path = '/uploads/meds/' . $filename;
        } else {
            $path = $med->image;
        }

        $med->update([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect()->route('meds')->with('warning', 'Medication updated successfully!');
    }

    public function destroy(Med $med)
    {
        $med->delete();
        return redirect()->back()->with('error', 'Medication deleted successfully!');
    }
}
