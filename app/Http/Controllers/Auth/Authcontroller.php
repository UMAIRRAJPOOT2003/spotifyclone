<?php 
namespace APP\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\registration_table;
use Illuminate\Support\Facades\Session;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Authcontroller extends Controller{
    public function Registration()
    {
        return view('projectfrontend.registration');
    }

    public function Login()
    {
        return view('projectfrontend.login');
    }

    public function Dashboard()
    {
        return view('projectfrontend.dashboard');
    }

     public function DataInsert(Request $request){
       
        // Validate the incoming request data
        $request->validate([
            'inputemail' => 'required|email|unique:registeredusers,EMAIL',
            'inputpassword' => 'required',
            'inputage' => 'required|numeric',
            'inputaddress' => 'required',
            'inputname' => 'required',
        ]);

        // Retrieve input data
        $email = $request->input('inputemail');
        $password = $request->input('inputpassword');
        $age = $request->input('inputage');
        $address = $request->input('inputaddress');
        $city = $request->input('inputname');

        // Attempt to insert data into the registration_table
        $isInsertSuccess = registration_table::insert([
            'EMAIL' => $email,
            'PASSWORD' => $password,
            'AGE' => $age,
            'ADDRESS' => $address,
            'CITY' => $city,
        ]);

        // Check if the insertion was successful
        if ($isInsertSuccess) {
            // Registration successful, redirect to login page
            return redirect()->route('login')->with('success', 'Registration successful! Please login.');
        } else {
            // Registration failed, redirect back to registration page with an error message
            return redirect()->route('registration')->with('error', 'Registration failed. Please enter valid credentials.');
        }
    }
    
    public function DataLogin(Request $request)
    {
        $request->validate([
            'loginemail' => 'required|email',
            'loginpassword' => 'required',
        ]);
    
        $user = registration_table::where('EMAIL', '=', $request->loginemail)->first();
    
        if ($user) {
            // Assuming $user->userpassword is the plain text password stored in the database
            if ($request->loginpassword === $user->PASSWORD) {
                Session::put('logintrack', $user->loginemail);

               
        
                return redirect()->route('dashboard');
            } else {
                return back()->with('fail', 'Incorrect Password!!!!');
            }
        } else {
            return back()->with('fail', 'This email is not registered. Please sign up first');
        }
    }
public function dashhboard()
    {
        $data=array();
        if(Session::has('logintrack')){
            $data=registration_table::where('EMAIL', '=', Session::has('logintrack'))->first();
        }
        return view('DashBoard',compact('data'));

    }
    public function logout(){
        if(Session::has('logintrack')){
            Session::pull('logintrack');
            return redirect()->route('login');
        }
    }

    public function Songs()
    {
        return view('projectfrontend.songs');
    }

    public function Artist2()
    {
        return view('projectfrontend.artist2');
    }

    public function Artist3()
    {
        return view('projectfrontend.artist3');
    }

    public function Artist4()
    {
        return view('projectfrontend.artist4');
    }

    public function Artist5()
    {
        return view('projectfrontend.artist5');
    }

    public function subcription()
    {
        return view('projectfrontend.subcription');
    }
    
    public function pricingform()
    {
        return view('projectfrontend.pricingform');
    }

    public function store(Request $request)
    {
        $mail = new PHPMailer(true);
    
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'wahaj5577712@gmail.com';
            $mail->Password   = 'cpppceqxwlanxlpt';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // Recipients
            $mail->setFrom('wahaj5577712@gmail.com', 'Spotify');
            $mail->addAddress($request->email,'Spotify');
    
            $mail->isHTML(true);
    
            $mail->Subject = "Spotify Premium User";
            $mail->Body    = "Hello $request->name!<br> You have successfully subscribed to Spotify Premium $request->package on a $request->plan basis. <br><br>Best Wishes <br>Team Spotify";
    
            if( !$mail->send() ) {

                return back()->with("error", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
                
            else {
                return back()->with("success", "Email has been sent.");
            }
    
        } catch (Exception $e) {
                return back()->with('error','Message could not be sent.');
        }
    }
}

    



