<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //    return view('items/index');
        $items = Item::all();
        return view('items/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('items/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //first method
        // $item= new Item();
        // $item->title = $request->title;
        // $item->body = $request->body;
        // $item->save();

        //second method

        Item::create(
            // 'title' => $request->title ,
            // 'body'=> $request->body
            // // OR USE THE FOLLOWING
            $request->all() // REMOVE ARRAY BRACKETS TO AVOID ERROR [MUST BE COLUMN HAVE SAME NAME ON BOTH SIDES]
        );

        return response('Done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $items = Item::onlyTrashed()->get();
        return view('items.softdeleted', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = Item::findorFail($id);
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $item = Item::findorFail($id);
        // $item->title = $request->title;
        // $item->body = $request->body;
        // $item->save();
        $item->update($request->all());

        return view('goback');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Item::findorFail($id)->delete();
        Item::destroy($id);
        return redirect()->back();
        //
    }
    public function restore($id)
    {

        Item::withTrashed()->where('id',$id)->restore();
         return redirect()->back();
        // Item::findorFail($id)->restore();
        // return view('goback');
    }
}
