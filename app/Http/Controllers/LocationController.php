<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Location;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
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
        if(!request()->ajax()) {
            return view('locations.index');
        }

        if(!request()->has('lat') || !request()->has('lng')) {
            return response()->json([]);
        }

        return Location::searchWithLatLng(request('lat'),request('lng'))->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LocationRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationRequest $request)
    {
        $data = $request->input();

        $extentions = ['jpg','jpeg','png','gif'];

        // Сохранение лого и картинки
        $logo_file = $request->file('logo_file');
        $img_file = $request->file('img_file');

        if($logo_file && in_array(strtolower($img_file->extension()),$extentions)) {
            $logo_file->move(storage_path('app/'));
            $data['logo'] = $logo_file->getFilename();
        }

        if($img_file && in_array(strtolower($img_file->extension()),$extentions)) {
            $img_file->move(storage_path('app/'));
            $data['img'] = $img_file->getFilename();
        }

//        dd($data);

        if(!Location::create($data)) {
            redirect()->back()->with('warning','Ошибка сохранения!')->withInput();
        }

        return redirect()->route('location.index')->with('message','Сохранено');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::find($id);

        if(request()->has("photo")) {
            if(request('photo') == "logo")
            {
                $path = public_path("/img/logo.png");
                if($location->logo && Storage::exists($location->logo))
                {
                    $path = storage_path('app/' . $location->logo);
                }
            } else { //if(request('photo') == "img")

                $path = public_path("/img/point_1.jpg");
                if($location->img && Storage::exists($location->img))
                {
                    $path = storage_path('app/' . $location->img);
                }
            }

            return response()->make(readfile($path, 200)
                ->header('Content-Type', 'image/png'));
        }

        abort(404);

        return null;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('locations.edit',['location' => Location::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->input();

        $extentions = ['jpg','jpeg','png','gif'];

        // Сохранение лого и картинки
        $logo_file = $request->file('logo_file');
        $img_file = $request->file('img_file');

        if($logo_file && in_array(strtolower($img_file->extension()),$extentions)) {
            $logo_file->move(storage_path('app/'));
            $data['logo'] = $logo_file->getFilename();
        }

        if($img_file && in_array(strtolower($img_file->extension()),$extentions)) {
            $img_file->move(storage_path('app/'));
            $data['img'] = $img_file->getFilename();
        }

//        dd($data);

        if(!Location::find($id)->update($data)) {
            redirect()->back()->with('warning','Ошибка сохранения!')->withInput();
        }

        return redirect()->route('location.index')->with('message','Сохранено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if(!Location::destroy($id)) {

            if(request()->ajax()) {
                return response()->json(['success' => false, 'message' => 'Не удалось удалить']);

            }

            return redirect()->back()->with('warning','Ошибка удаления!');
        }

        if(request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'Удалено!']);

        }

        return redirect()->route('location.index')->with('message','Удалено');
    }
}
