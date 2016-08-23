<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionRequest;
use App\Option;
use Illuminate\Http\Request;

use App\Http\Requests;

class OptionController extends Controller
{
    /**
     * PageController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
//        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Option::paginate(10);
        return view('options.index',['options' => $options]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('options.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param OptionRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(OptionRequest $request)
    {
        $data = $request->all();

        if(!Option::create($data)) {
            return redirect()->back()->withInput()->with('warning','Ошибка сохранения');
        }

        return redirect()->route('options.index')->with('message','Сохранено');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('options.edit',['option' => Option::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        if(!Option::updateOrCreate(['id' => $id],$data)) {
            return redirect()->back()->withInput()->with('warning','Ошибка сохранения');
        }

        return redirect()->route('options.index')->with('message','Сохранено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
