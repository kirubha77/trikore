<?php

namespace App\Http\Controllers;
use Mail;
use App\Contactform;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(Request $request){
    	 try{   
    	 		
    	 		$validatedData = $request->validate([
			        'name' => 'required',
			        'email' => 'required',
			        'phone_no' => 'required',
			        'goal' => 'required',
			        'find_us' => 'required',
    			]);

		    	$mail= new Contactform();
		    	$mail->name 		=request('name');
		    	$mail->email 		=request('email');
		    	$mail->phone_no 	=request('phone_no');
		    	$mail->website 		=request('website');
		    	$mail->goal 		=serialize(request('goal'));
		    	$mail->message 		=request('message');
		    	$mail->find_us 		=request('find_us');
		    	$mail->save();
		        $data = [
		                    'name' 		=> $mail->name,
		                    'email' 	=> $mail->email,
		                    'phone_no' 	=> $mail->phone_no,
		                    'website' 	=> $mail->website,
		                    'goal' 		=> $mail->goal,
		                    'message' 	=> $mail->message,
		                    'find_us' 	=> $mail->find_us
		                ];
		    	Mail::send(['html'=>'contact_us_mail'], ["data"=>$data], function($message) {
		            $message->from( request('email') , request('name'));
		            $message->to(env('MAIL_USERNAME'), request('name'))->subject('Contact Form Enquiry');
		            });

		    	return view('thank_you');
	        }catch(Exception $e){
	            return back()->with('warning','Something went wrong!');
	        }
    }
    




    public function sendQuoteMail(){
    	 try{    
		    	$mail= new Contactform();
		    	$mail->name 		=request('name');
		    	$mail->email 		=request('email');
		    	$mail->phone_no 	=request('phone_no');
		    	$mail->website 		=request('website');
		    	$mail->goal 		=serialize(request('goal'));
		    	$mail->message 		=request('message');
		    	$mail->find_us 		=request('find_us');
		    	$mail->save();
		        $data = [
		                    'name' 		=> $mail->name,
		                    'email' 	=> $mail->email,
		                    'phone_no' 	=> $mail->phone_no,
		                    'website' 	=> $mail->website,
		                    'goal' 		=> $mail->goal,
		                    'message' 	=> $mail->message,
		                    'find_us' 	=> $mail->find_us
		                ];
		    	Mail::send(['html'=>'request_quote_mail'], ["data"=>$data], function($message) {
		            $message->from( request('email') , request('name'));
		            $message->to(env('MAIL_USERNAME'), request('name'))->subject('Request a Quote');
		            });
		    	
		    	// return back()->with('success','Mail Send Successfully');
		    	return view('thank_you');

	        }catch(Exception $e){
	            return back()->with('warning','Something went wrong!');
	        }
    }
    
}

