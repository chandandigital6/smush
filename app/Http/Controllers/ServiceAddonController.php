<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceAddonRequest;
use App\Models\Service;
use App\Models\ServiceAddon;
use Illuminate\Http\Request;

class ServiceAddonController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $serviceAddon = ServiceAddon::query();

        if (!empty($keyword)) {
            $serviceAddon->where('title', 'like', "%$keyword%");
        }
        $serviceAddonData = $serviceAddon->paginate(5);

        return view('servideadon.index',compact('serviceAddonData'));
    }

    public function create(){
        $services = Service::all();
        return view('servideadon.create',compact('services'));
    }

    public function store(ServiceAddonRequest $request){
//        dd($request);
        $serviceAddon=ServiceAddon::create($request->all());
//        $image = $request->file('image')->store('public/serviceAddon');
//
//        $serviceAddon->image = str_replace('public/', '', $image);
//        $serviceAddon->save();
        return redirect()->route('serviceAddon.index')->with('success', 'serviceAddon  created successfully.');
    }

    public function edit(ServiceAddon $serviceAddon){
        // dd($serviceAddon);
        $services = Service::all();
        // return view('serviceAddon.create',compact('services'));
        return view('servideadon.create',compact('serviceAddon','services'));
    }

    public function update(ServiceAddon $serviceAddon , ServiceAddonRequest $request){
        $serviceAddonData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/serviceAddon');
//            $serviceAddonData['image'] = str_replace('public/', '', $imagePath);
//        }

        $serviceAddon->update($serviceAddonData);

        return redirect()->route('serviceAddon.index')->with('success', 'serviceAddon item successfully updated');
    }


    public function delete(ServiceAddon $serviceAddon){
        $serviceAddon->delete();
        return redirect()->route('serviceAddon.index')->with('error','Successfully  serviceAddon items deleted');

    }
    public function duplicate(ServiceAddon $serviceAddon){
        $productDuplicate=$serviceAddon->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
