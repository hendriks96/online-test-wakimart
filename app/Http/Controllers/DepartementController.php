<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartementController extends Controller
{
    public function index()
    {
        $departements = DB::table('departement')->paginate(5);

        return view('index', compact('departements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        DB::table('departement')->insert([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('index')
            ->with('success', 'Departement created successfully.');
    }

    public function show($id)
    {

        $departement   =   DB::table('departement')->where('id', $id)->first();
        return view('show', compact('departement'));
    }

    public function edit($id)
    {
        $departement    =   DB::table('departement')->where('id', $id)->first();
        return view('edit', compact('departement'));
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        DB::table('departement')
            ->where('id', $request->id)
            ->update(['name' => $request->name, 'email' => $request->email]);

        return redirect()->route('index')
            ->with('success', 'Departement updated successfully');
    }

    public function destroy($id)
    {
        DB::table('departement')
            ->where('id', $id)
            ->delete();

        return redirect()->route('index')
            ->with('success', 'Departement deleted successfully');
    }
}
