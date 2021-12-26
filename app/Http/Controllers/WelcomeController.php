<?php

namespace App\Http\Controllers;

use App\Information;
use App\Education;
use App\Experience;
use App\Project;
use App\Category;
use App\Portfolio;
use App\Services;
use App\Skills;
use App\Testimonials;
use App\Mail;

use App\User;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $information    = Information::first();
        $educations     = Education::orderBy('id', 'DESC')->where('active', 1)->get();
        $experiences     = Experience::orderBy('id', 'DESC')->where('active', 1)->get();
        $categories     = Category::orderBy('id', 'DESC')->where('active', 1)->get();
        $portfolios     = Portfolio::orderBy('id', 'DESC')->where('active', 1)->get();
        $services       = Services::get()->where('active', 1);
        $skills         = Skills::get()->where('active', 1);
        $testimonials   = Testimonials::get()->where('active', 1);
        
        return view(
            'welcome',
            compact(
                'information',
                'educations',
                'experiences',
                'categories',
                'portfolios',
                'services',
                'skills',
                'testimonials',
            ),
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return $request;
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required|max:255',
            'message' => 'required',
        ],[
            'first_name.required' => 'يرجي ادخال الاسم الاول',
            'last_name.required' => 'يرجي ادخال الاسم الاخير',
            'email.required' => 'يرجي ادخال البريد الالكتروني',
            'phone.required' => 'يرجي ادخال رقم الهاتف',
            'subject.required' => 'يرجي ادخال عنوان الرسالة',
            'message.required' => 'يرجي كتابة الرسالة',
        ]);

        Mail::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        //$user = User::first();
        //Notification::send($user, new AddInvoice($invoice_id));

        //session()->flash('success', 'تم ارسال الرسالة بنجاح');
        return redirect('/#contact');
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
        //
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
        //
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
