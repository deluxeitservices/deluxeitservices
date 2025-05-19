<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
 use Illuminate\Support\Str;
 use App\Models\PreownedSale; // Make sure you import the model
 use App\Models\PreownedContact; // Make sure you import the model
 use App\Models\PreownedNewsletter; // Make sure you import the model
 use App\Models\ProductFrontImages; // Make sure you import the model
 use Illuminate\Support\Facades\Storage; // Add this line


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

   
        /**
     * Show the application About Us.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutus()
    {

        return view('about');
    }


        /**
     * Show the application seo.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function seo()
    {

        return view('seo');
    }

        /**
     * Show the application Contact Us.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contactus()
    {
        return view('contact');        
    }


    public function contactusformsubmit(Request $request)
    {
          // Store the form data in the database
          // $contactus = new PreownedContact();
          // $contactus->full_name = $request->name;
          // $contactus->email = $request->email;
          // $contactus->phone = $request->phone;
          // $contactus->message = $request->message;
          // $contactus->save();

        // 1. Send email to the user
        $userTo = $request->email;
        $userSubject = 'Thank you for contacting us!';
        $userContent = view('emails.user_contact_confirmation', [
            'user_name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
        ])->render();

        sendMailCommon($userTo, $userSubject, $userContent);

        // 2. Send email to the admin
        //$adminTo = 'junedm90@gmail.com'; // Replace with actual admin email
        $adminTo = 'deluxe.it.services@gmail.com'; // Replace with actual admin email
        //$adminTo= getAdminEmail();
        $adminSubject = 'New Contact Us Inquiry';
        $adminContent = view('emails.admin_contact_notification', [
            'user_name' => $request->name,
            'user_email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ])->render();

        sendMailCommon($adminTo, $adminSubject, $adminContent);

         /* // Store file if uploaded
          if ($request->hasFile('form_file')) {
              $path = $request->file('form_file')->store('uploads', 'public');
              $sale->form_file = $path;
          }*/

        //   <img src="{{ asset('storage/' . $imagePath) }}" alt="Uploaded Image" class="img-thumbnail" style="max-width: 150px; margin: 5px;">
        // http://your-domain/storage/uploads/u3lRhbrGzzoyVmU1iNy7I2HWZQzcK4SXyRLOf9vu.png
        // http://127.0.0.1:8000/storage/uploads/u3lRhbrGzzoyVmU1iNy7I2HWZQzcK4SXyRLOf9vu.png

        //   ["uploads\/u3lRhbrGzzoyVmU1iNy7I2HWZQzcK4SXyRLOf9vu.png","uploads\/GsmrKA66DaFkmFG7JwbsknFpGXH8MOs8VJnycYbI.jpg"]

        // Store files if uploaded
        
  

        // Return success response
        return back()->with('success', '"Your inquiries have been successfully added');
        //return response()->json(['success' => true, 'message' => 'Data saved successfully!']);            
    }
       /**
     * Show the application FAQ.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolio()
    {
        return view('portfolio');        
    }

    //    /**
    //  * Show the application Return policy.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function returnPolicy()
    // {
    //     return view('return-policy');        
    // }

    //    /**
    //  * Show the application Terms and condition.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function termsCondition()
    // {
    //     return view('terms-and-conditions');        
    // }


    // public function privacyPolicy()
    // {
    //     return view('privacy');        
    // }

    // public function ourShowrooms()
    // {
    //     return view('ourShowrooms');        
    // }

    // public function guide()
    // {
    //     return view('guide');        
    // }

    // public function delivery()
    // {
    //     return view('delivery');        
    // }

    // public function watchRepairs()
    // {
    //     return view('watchRepairs');        
    // }

    // public function bookappointment()
    // {
    //     return view('bookappointment');        
    // }

}
