<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceBenefitRequest;
use App\Models\Service;
use App\Models\ServiceBenefit;
use Illuminate\Http\Request;

class ServiceBenefitController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $serviceBenefit = ServiceBenefit::query();

        if (!empty($keyword)) {
            $serviceBenefit->where('title', 'like', "%$keyword%");
        }
        $serviceBenefitData = $serviceBenefit->paginate(5);

        return view('servicebenefit.index',compact('serviceBenefitData'));
    }

    public function create(){
        $services = Service::all();
        return view('servicebenefit.create',compact('services'));
    }

    public function store(ServiceBenefitRequest $request){
//        dd($request);
        $serviceBenefit=serviceBenefit::create($request->all());
//        $image = $request->file('image')->store('public/serviceBenefit');
//
//        $serviceBenefit->image = str_replace('public/', '', $image);
//        $serviceBenefit->save();
        return redirect()->route('serviceBenefit.index')->with('success', 'serviceBenefit  created successfully.');
    }

    public function edit(serviceBenefit $serviceBenefit){
        // dd($serviceBenefit);
        $services = Service::all();
        // return view('serviceBenefit.create',compact('services'));
        return view('servicebenefit.create',compact('serviceBenefit','services'));
    }

    public function update(serviceBenefit $serviceBenefit , ServiceBenefitRequest $request){
        $serviceBenefitData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/serviceBenefit');
//            $serviceBenefitData['image'] = str_replace('public/', '', $imagePath);
//        }

        $serviceBenefit->update($serviceBenefitData);

        return redirect()->route('serviceBenefit.index')->with('success', 'serviceBenefit item successfully updated');
    }


    public function delete(serviceBenefit $serviceBenefit){
        $serviceBenefit->delete();
        return redirect()->route('serviceBenefit.index')->with('error','Successfully  serviceBenefit items deleted');

    }
    public function duplicate(serviceBenefit $serviceBenefit){
        $productDuplicate=$serviceBenefit->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
