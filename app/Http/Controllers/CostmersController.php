<?php

namespace App\Http\Controllers;

use App\Models\Costmers;
use App\Http\Requests\StoreCostmersRequest;
use App\Http\Requests\UpdateCostmersRequest;
use Inertia\Inertia;
use Illuminate\Http\Request;

class CostmersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $customers = Costmers::searchCustomer($request->search)
        ->select('id','name','kana', 'tel')->paginate(50);

        

        return Inertia::render('Costmers/Index',[
            'costmers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Costmers/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCostmersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCostmersRequest $request)
    {
        Costmers::create([
        'name' => $request->name,
        'kana' => $request->kana,
        'tel' => $request->tel,
        'email' => $request->email,
        'postcode' => $request->postcode,
        'address' => $request->address,
        'birthday' => $request->birthday,
        'gender' => $request->gender,
        'memo' => $request->memo,
        ]);

        return to_route('costmers.index')
        ->with([
            'message'=> '登録しました。',
            'status'=>'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Costmers  $costmers
     * @return \Illuminate\Http\Response
     */
    public function show(Costmers $costmers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Costmers  $costmers
     * @return \Illuminate\Http\Response
     */
    public function edit(Costmers $costmers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCostmersRequest  $request
     * @param  \App\Models\Costmers  $costmers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCostmersRequest $request, Costmers $costmers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Costmers  $costmers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Costmers $costmers)
    {
        //
    }
}
