<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Mail\AppointmentCreated;
use App\Mail\AdminAppointmentNotification;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $appointment = Appointment::query();

        if (!empty($keyword)) {
            $appointment->where('title', 'like', "%$keyword%");
        }
        $appointmentData = $appointment->paginate(5);

        return view('appointment.index',compact('appointmentData'));
    }

//    public function create(){
//        return view('appointment.create');
//    }

    public function store(AppointmentRequest $request){
//        dd($request);
        $validated = $request->validated();

        // Handle file uploads
        $imagePaths = [];
        if ($request->hasFile('car_image')) {
            foreach ($request->file('car_image') as $image) {
                $imagePath = $image->store('public/car_images');
                $imagePaths[] = str_replace('public/', '', $imagePath);
            }
        }

        // Save appointment
        $appointment = Appointment::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'number' => $validated['number'],
            'msg' => $validated['msg'],
            'car_name' => $validated['car_name'],
            'car_model' => $validated['car_model'],
            'car_image' => implode(',', $imagePaths), // Store as comma-separated string
        ]);

        // Send email if the appointment is created
        if ($appointment) {
            // Send email to the user
            Mail::to($appointment->email)->send(new AppointmentCreated($appointment));

            // Send email to the admin
            $adminEmail = 'mobilesmashrepair87@gmail.com';

            Mail::to($adminEmail)->send(new AdminAppointmentNotification($appointment));
        }
        return redirect()->route('home.thank')->with('success', 'Appointment  created successfully.');
//        return redirect()->back()->with('success', 'Appointment  created successfully.');
    }

//    public function edit(Appointment $appointment){
//
//        return view('appointment.edit',compact('appointment'));
//    }
//
//    public function update(Appointment $appointment , AppointmentRequest $request){
//        $appointmentData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/appointment');
//            $appointmentData['image'] = str_replace('public/', '', $imagePath);
//        }
//
//        $appointment->update($appointmentData);
//
//        return redirect()->route('appointment.index')->with('success', 'appointment item successfully updated');
//    }


    public function delete(Appointment $appointment){
        $appointment->delete();
        return redirect()->route('appointment.index')->with('error','Successfully  appointment items deleted');

    }
    public function duplicate(Appointment $appointment){
        $productDuplicate=$appointment->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
