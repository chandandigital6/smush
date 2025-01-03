<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceBestRequest;
use App\Models\Service;
use App\Models\ServiceBest;
use Illuminate\Http\Request;

class ServiceBestController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $serviceBest = ServiceBest::query();

        if (!empty($keyword)) {
            $serviceBest->where('title', 'like', "%$keyword%");
        }
        $serviceBestData = $serviceBest->paginate(5);

        return view('servicebest.index',compact('serviceBestData'));
    }

    public function create(){
        $services = Service::all();
        return view('servicebest.create',compact('services'));
    }

    public function store(ServiceBestRequest $request){
//        dd($request);
        $serviceBest=serviceBest::create($request->all());
//        $image = $request->file('image')->store('public/serviceBest');
//
//        $serviceBest->image = str_replace('public/', '', $image);
//        $serviceBest->save();
        return redirect()->route('serviceBest.index')->with('success', 'serviceBest  created successfully.');
    }

    public function edit(serviceBest $serviceBest){
        // dd($serviceBest);
        $services = Service::all();
        // return view('serviceBest.create',compact('services'));
        return view('servicebest.create',compact('serviceBest','services'));
    }

    public function update(serviceBest $serviceBest , ServiceBestRequest $request){
        $serviceBestData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/serviceBest');
//            $serviceBestData['image'] = str_replace('public/', '', $imagePath);
//        }

        $serviceBest->update($serviceBestData);

        return redirect()->route('serviceBest.index')->with('success', 'serviceBest item successfully updated');
    }


    public function delete(serviceBest $serviceBest){
        $serviceBest->delete();
        return redirect()->route('serviceBest.index')->with('error','Successfully  serviceBest items deleted');

    }
    public function duplicate(serviceBest $serviceBest){
        $productDuplicate=$serviceBest->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
