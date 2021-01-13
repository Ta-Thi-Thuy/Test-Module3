<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExampleRequest;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $agencys = Agency::paginate(3);
        return view('list', compact('agencys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $agency = Agency::all();
        return view('create', compact('agency'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $agency = new Agency();
        $agency->id = $request->input('id');
        $agency->name = $request->input('name');
        $agency->phone = $request->input('phone');
        $agency->email = $request->input('email');
        $agency->address = $request->input('address');
        $agency->managerName = $request->input('managerName');
        $agency->status = $request->input('status');

        $agency->save();
        return redirect()->route('list');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Http\Response
     */
    public function show(Agency $agency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agency = Agency::findOrFail($id);
        return view('edit', compact('agency'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $agency = Agency::findOrFail($id);
        $agency->name = $request->input('name');
        $agency->phone = $request->input('phone');
        $agency->email = $request->input('email');
        $agency->address = $request->input('address');
        $agency->managerName = $request->input('managerName');
        $agency->status = $request->input('status');

        $agency->save();
        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $agency = Agency::find($id);
        $agency->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('list');
        }
        $agencys = Agency::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        Session::flash('search_result', true);
        return view('list', compact('agencys'));

    }
}
