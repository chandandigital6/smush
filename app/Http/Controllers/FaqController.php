<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use App\Models\Service;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $faqs = Faq::query();

        if (!empty($keyword)) {
            $faqs->where('title', 'like', "%$keyword%");
        }
        $faqsData = $faqs->paginate(5);

        return view('faqs.index',compact('faqsData'));
    }

    public function create(){
        $services = Service::all();
        return view('faqs.create',compact('services'));
    }

    public function store(FaqRequest $request){
//        dd($request);
        $faqs=Faq::create($request->all());
//        $image = $request->file('image')->store('public/faqs');
//
//        $faqs->image = str_replace('public/', '', $image);
//        $faqs->save();
        return redirect()->route('faqs.index')->with('success', 'faqs  created successfully.');
    }

    public function edit(Faq $faqs){
        $services = Service::all();
        // return view('faqs.create',compact('services'));
        return view('faqs.create',compact('faqs','services'));
    }

    public function update(Faq $faqs , FaqRequest $request){
        $faqsData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/faqs');
//            $faqsData['image'] = str_replace('public/', '', $imagePath);
//        }

        $faqs->update($faqsData);

        return redirect()->route('faqs.index')->with('success', 'faqs item successfully updated');
    }


    public function delete(Faq $faqs){
        $faqs->delete();
        return redirect()->route('faqs.index')->with('error','Successfully  faqs items deleted');

    }
    public function duplicate(Faq $faqs){
        $productDuplicate=$faqs->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
