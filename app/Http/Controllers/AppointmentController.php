<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Mail\AppointmentCreated;
use App\Mail\AdminAppointmentNotification;
use App\Models\Appointment;
use App\Models\AppointmentImage;
use App\Services\BrevoMailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class AppointmentController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $sort_by = $request->input('sort_by', 'created_at'); // Default sort column
        $sort_order = $request->input('sort_order', 'desc'); // Default sort order

        $appointment = Appointment::query();

        if (!empty($keyword)) {
            $appointment->where('name', 'like', "%$keyword%");
        }

        $appointment->orderBy($sort_by, $sort_order);

        $appointmentData = $appointment->paginate(5);

        return view('appointment.index', compact('appointmentData', 'sort_by', 'sort_order'));
    }


    //    public function create(){
    //        return view('appointment.create');
    //    }

    public function store(AppointmentRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();

        $images = [];
        if ($request->car_image) {
            //get an array of image paths from apointment_images for selected images
            $images = AppointmentImage::whereIn('id', $request->car_image)->pluck('image')->toArray();
        }

        // Save appointment
        $appointment = Appointment::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'number' => $validated['number'],
            'msg' => $validated['msg'],
            'suburb' => $validated['suburb'],
            //            'car_name' => $validated['car_name'],
            'car_model' => $validated['car_model'],
            'car_image' => implode(',', $images), // Store as comma-separated string
        ]);

        // Send email if the appointment is created
        if ($appointment) {
            if ($request->car_image) {
                //delete all images which we added in appointment
                AppointmentImage::whereIn('id', $request->car_image)->delete();
            }

            // Send email to the admin
            $viewContent = View::make('appointment.mailTemplate', ['appointment' => $appointment])->render();

            //send email to admin
            $this->sendEmail(env('ADMIN_EMAIL'), $viewContent);

            //send email to user
            $this->sendEmail($appointment->email, $viewContent);
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

    //save image in database
    public function image(Request $request)
    {
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('public/car_images');
            $imagePath = str_replace('public/', '', $imagePath);
            $image = AppointmentImage::create([
                'image' => $imagePath
            ]);
            return response()->json(['status' => true, 'message' => 'Success!', 'data' => $image]);
        } else {
            return response()->json(['status' => false, 'message' => 'Image is required!']);
        }
    }

    public function delete(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointment.index')->with('error', 'Successfully  appointment items deleted');
    }
    public function duplicate(Appointment $appointment)
    {
        return view('appointment.show', compact('appointment'));
        //        $productDuplicate=$appointment->replicate();
        //        $productDuplicate->save();
        //        return redirect()->back();
    }

    public function sendEmail($email, $viewContent)
    {
        $mailer = [
            "sender" => [
                "name" => env('APP_NAME'),
                "email" => env('MAIL_FROM_ADDRESS')
            ],
            "to" => [
                [
                    "email" => $email
                ]
            ],
            "subject" => "New Appointment Created",
            "htmlContent" => $viewContent
        ];

        BrevoMailService::send($mailer);
    }
}
