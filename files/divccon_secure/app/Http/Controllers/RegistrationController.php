<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Admin;
use App\Mail\SuccessfulRegistration;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\RegistrationRequest2;
use App\Http\Requests\RegistrationRequest3;
use App\Http\Requests\RegistrationRequest4;
use App\Http\Requests\RegistrationRequest5;
use App\Http\Requests\RegistrationRequest6;
use App\Http\Requests\MembershipRequest;
use App\Http\Requests\ChangephotoRequest;
use App\Http\Requests\ChangeinfoRequest;

class RegistrationController extends Controller
{
    /**
     * VIEWING THE HOME PAGE
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
      return view('home');
    }


//######################################### REGISTRATION ########################################
//###############################################################################################
//###############################################################################################
//###############################################################################################
//###############################################################################################

    // /**
    //  * SMS TEST
    //  * @return \Illuminate\Http\Response
    //  */
    // public function sms_test()
    // {
    //     /* Variables with the values to be sent. */
    //     $title = "Mr";
    //     $firstname = "Mike";
    //     $lastname = "Bamidele";
    //     $id = "000012";
    //     $pin = "AAAAAA";
    //     $phone = "07011350893";

    //     $message=UrlEncode("Congratulations, ".$title." ".$firstname." ".$lastname."! You have successfully registered for DIVCCON. YOUR ID is: ".$id."; PIN is: ".$pin.".");

    //     $url = "http://www.smslive247.com/http/index.aspx?cmd=sendquickmsg&owneremail=omeatai@gmail.com&subacct=DIVCCON&subacctpwd=Empirex123&message=$message&sender=DIVCCON&sendto=$phone&msgtype=0";


    //     /* create the required URL */
    //     // $owneremail= "omeatai@gmail.com";
    //     // $subacct= "DIVCCON";
    //     // $subacctpwd= "Empirex123";
    //     // $message=UrlEncode("Congratulations, ".$title." ".$firstname." ".$lastname."! You have successfully registered for DIVCCON. YOUR ID is: ".$id."; PIN is: ".$pin.".");
    //     // $sender= "DIVCCON";
    //     // $msgtype= 0;

    //     // $url = "http://www.smslive247.com/http/index.aspx?"
    //     // ."cmd=sendquickmsg"
    //     // ."&owneremail=".$owneremail
    //     // ."&subacct=" . $subacct
    //     // ."&subacctpwd=".$subacctpwd
    //     // ."&message=".$message
    //     // ."&sender=".$sender
    //     // ."&sendto=".$sendto
    //     // ."&msgtype=".$msgtype;

    //     @fopen($url, "r");


    // }




     /**
     * VIEWING THE REGISTER 1 PAGE
     * @return \Illuminate\Http\Response
     */
    public function registration1_index()
    {
      return view('registration.registration1');
    }


    /**
     * LOGIC FOR THE REGISTER 1 PAGE
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registration1_post(RegistrationRequest $request)
    {
      //store the inputed values into variables
      $pin = strtoupper($request->input('pin'));
      $firstname = strtoupper($request->input('firstname'));
      $lastname = strtoupper($request->input('lastname'));
      $title = strtoupper($request->input('title'));
      $phone = strtoupper($request->input('phone'));
      $email = strtoupper($request->input('email'));
      $sex = strtoupper($request->input('sex'));

        //If member is in the registration table with the inputed pin, then just update the existing entries only.
        if($member = Registration::wherePin($pin)->first()){
            if($member->status == 0){
                $member->firstname = $firstname;
                $member->lastname = $lastname;
                $member->title = $title;
                $member->phone = $phone;
                $member->email = $email;
                $member->sex = $sex;
                $member->save();
            }
        }else{
            //If it is a fresh registration (member is not in the registration table)
            $member = new Registration();
            $member->pin = $pin;
            $member->firstname = $firstname;
            $member->lastname = $lastname;
            $member->title = $title;
            $member->phone = $phone;
            $member->email = $email;
            $member->sex = $sex;
            $member->anglican = "NULL";
            $member->location= "NULL";
            $member->province = "NULL";
            $member->diocese = "NULL";
            $member->church = "NULL";
            $member->designation = "NULL";
            $member->committee = "NULL";
            $member->user_photo = "no_image.jpg";
            $member->save();
        }

        //create sessions
        session([
            'pin' => $pin,
            'title' => $title,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'page2'=> true,
            'page3'=> false,
            'page4'=> false,
            'page5'=> false,
            'page6'=> false,
            'successpage'=> false,
         ]);

        return redirect('/registration2');
    }








    /**
     * VIEWING THE REGISTER 2 PAGE
     * @return \Illuminate\Http\Response
     */
    public function registration2_index()
    {
        if (!session('pin')) {
            return redirect('/registration');
            }

        if (!session('page2')) {
             return redirect('/registration');
            }

        $data = array(
            'pin' => session('pin'),
            'title' => session('title'),
            'firstname' => session('firstname'),
            'lastname' => session('lastname'),
            );

      return view('registration.registration2')->with($data);
    }







    //LOGIC FOR THE REGISTER 2 PAGE
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registration2_post(RegistrationRequest2 $request)
    {
        $location = strtoupper($request->input('location'));
        $anglican = strtoupper($request->input('anglican'));
        $pin = session('pin');
        $abroad = 'ABROAD';
        $guest = 'GUEST';
        $visitor = 'VISITOR';


        //if member is abroad, then store as abroad and send to page 6.
        if($location == 'ABROAD'){
            $member = Registration::wherePin($pin)->first();
            $member->location = $location;
            $member->anglican = $anglican;
            $member->province = $abroad;
            $member->diocese = $abroad;
            $member->designation = $visitor;
            $member->save();

            session([
                'page2'=> false,
                'page3'=> false,
                'page4'=> false,
                'page5'=> false,
                'page6'=> true,
                'successpage'=> false,
             ]);

            return redirect('/registration6');
        }

        //if member is a non-anglican location in nigeria, then store as visitor and send to page 6.
        if($location == 'HOME' && $anglican == 'NON_ANGLICAN'){
            $member = Registration::wherePin($pin)->first();
            $member->location = $location;
            $member->anglican = $anglican;
            $member->province = $guest;
            $member->diocese = $guest;
            $member->designation = $visitor;
            $member->save();

            session([
                'page2'=> false,
                'page3'=> false,
                'page4'=> false,
                'page5'=> false,
                'page6'=> true,
                'successpage'=> false,
             ]);

            return redirect('/registration6');
        }

        //if member is an anglican location in nigeria, then store and send to page 3.
        $member = Registration::wherePin($pin)->first();
        $member->location = $location;
        $member->anglican = $anglican;
        $member->province = 'NULL';
        $member->diocese = 'NULL';
        $member->designation = 'NULL';
        $member->save();

        session([
            'page2'=> false,
            'page3'=> true,
            'page4'=> false,
            'page5'=> false,
            'page6'=> false,
            'successpage'=> false,
         ]);

        return redirect('/registration3');
    }








     /**
     * VIEWING THE REGISTER 3 PAGE
     * @return \Illuminate\Http\Response
     */
    public function registration3_index()
    {
        if (!session('pin')) {
            return redirect('/registration');
            }

        if (!session('page3')) {
             return redirect('/registration');
            }

        $data = array(
            'pin' => session('pin'),
            'title' => session('title'),
            'firstname' => session('firstname'),
            'lastname' => session('lastname'),
            );

      return view('registration.registration3')->with($data);
    }






    //LOGIC FOR THE REGISTER 3 PAGE
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registration3_post(RegistrationRequest3 $request)
    {
        $province = strtoupper($request->input('province'));
        $diocese = strtoupper($request->input('diocese'));
        $pin = session('pin');

        $member = Registration::wherePin($pin)->first();
        $member->province = $province;
        $member->diocese = $diocese;
        $member->save();

        //if member is from Abuja diocese, then send to page 4.
        if($diocese == 'ABUJA'){
            session([
                'page2'=> false,
                'page3'=> false,
                'page4'=> true,
                'page5'=> false,
                'page6'=> false,
                'successpage'=> false,
             ]);

            return redirect('/registration4');
        }

        //if member is NOT from Abuja diocese, then send to page 5.
        session([
            'page2'=> false,
            'page3'=> false,
            'page4'=> false,
            'page5'=> true,
            'page6'=> false,
            'successpage'=> false,
         ]);

        return redirect('/registration5');
    }











    /**
     * VIEWING THE REGISTER 4 PAGE
     * @return \Illuminate\Http\Response
     */
    public function registration4_index()
    {
        if (!session('pin')) {
            return redirect('/registration');
            }

        if (!session('page4')) {
             return redirect('/registration');
            }

        $data = array(
            'pin' => session('pin'),
            'title' => session('title'),
            'firstname' => session('firstname'),
            'lastname' => session('lastname'),
            );

      return view('registration.registration4')->with($data);
    }








    //LOGIC FOR THE REGISTER 4 PAGE
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registration4_post(RegistrationRequest4 $request)
    {
        $church = strtoupper($request->input('church'));
        $pin = session('pin');

        $member = Registration::wherePin($pin)->first();
        $member->church = $church;
        $member->save();

        session([
            'page2'=> false,
            'page3'=> false,
            'page4'=> false,
            'page5'=> true,
            'page6'=> false,
            'successpage'=> false,
         ]);

        return redirect('/registration5');
    }





    /**
     * VIEWING THE REGISTER 5 PAGE
     * @return \Illuminate\Http\Response
     */
    public function registration5_index()
    {
        if (!session('pin')) {
            return redirect('/registration');
            }

        if (!session('page5')) {
             return redirect('/registration');
            }

        $data = array(
            'pin' => session('pin'),
            'title' => session('title'),
            'firstname' => session('firstname'),
            'lastname' => session('lastname'),
            );

      return view('registration.registration5')->with($data);
    }





    //LOGIC FOR THE REGISTER 5 PAGE
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registration5_post(RegistrationRequest5 $request)
    {
        $designation = strtoupper($request->input('designation'));
        $pin = session('pin');

        $member = Registration::wherePin($pin)->first();
        $member->designation = $designation;
        $member->save();

        session([
            'page2'=> false,
            'page3'=> false,
            'page4'=> false,
            'page5'=> false,
            'page6'=> true,
            'successpage'=> false,
         ]);

        return redirect('/registration6');
    }








    /**
     * VIEWING THE REGISTER 6 PAGE
     * @return \Illuminate\Http\Response
     */
    public function registration6_index()
    {
        if (!session('pin')) {
            return redirect('/registration');
            }

        if (!session('page6')) {
             return redirect('/registration');
            }

        $data = array(
            'pin' => session('pin'),
            'title' => session('title'),
            'firstname' => session('firstname'),
            'lastname' => session('lastname'),
            );

      return view('registration.registration6')->with($data);
    }







    //LOGIC FOR THE REGISTER 6 PAGE
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registration6_post(RegistrationRequest6 $request)
    {
        //Get variables from Session
        $pin = session('pin');
        $firstname = session('firstname');
        $lastname = session('lastname');

        //Handle File Upload
        if($request->hasFile('fileup')){
            //Get filename with the extension
            $filenameWithExt = $request->file('fileup')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('fileup')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $pin.'_'.$firstname.'_'.$lastname.'_'.$filename.'_'.time().'.'.$extension;
            //Upload Image to file
            //$path = $request->file('user_photo')->storeAs('avatars', $fileNameToStore);
            $path = $request->file('fileup')->move(public_path('avatars'), $fileNameToStore);
        }else {
            $fileNameToStore = 'no_image.jpg';
        }

            //Check current date
            $t = strtotime("Today");

            //set time boundaries
            $e_start =strtotime("June 01, 2021");
            $e_end =strtotime("August 14, 2021");

            $m_start =strtotime("August 15, 2020");
            $m_end =strtotime("October 02, 2020");

            $l_start =strtotime("October 03, 2020");
            $l_end =strtotime("November 03, 2020");

            $c_start =strtotime("November 04, 2020");
            $c_end =strtotime("November 12, 2020");

            //set time batch
            switch (TRUE) {
                case ($e_start <= $t && $t <= $e_end):
                    $batch = 1;
                    break;
                case ($m_start <= $t && $t <= $m_end):
                    $batch = 2;
                    break;
                case ($l_start <= $t && $t <= $l_end):
                    $batch = 3;
                    break;
                case ($c_start <= $t && $t <= $c_end):
                    $batch = 4;
                    break;
                default:
                    $batch = 0;
                }

            //Confirm Member in Registration database
            $member = Registration::wherePin($pin)->first();
            $member->user_photo = $fileNameToStore;
            $member->batch = $batch;
            $member->status = 1;
            $member->save();

            $email = $member->email;

            session([
                'page2'=> false,
                'page3'=> false,
                'page4'=> false,
                'page5'=> false,
                'page6'=> false,
                'successpage'=> true,
                'id' => $member->id,
                'title' => $member->title,
                'phone' => $member->phone,
                'email' => $member->email,
                'sex' => $member->sex,
                'location' => $member->location,
                'anglican' => $member->anglican,
                'province' => $member->province,
                'diocese' => $member->diocese,
                'church' => $member->church,
                'designation' => $member->designation,
                'committee' => $member->committee,
                'user_photo' => $member->user_photo,
                'batch' => $member->batch,
                'status' => $member->status,
             ]);

            //create Email
            Mail::to($email)->send(new SuccessfulRegistration());


        return redirect('/success');
    }






    /**
     * VIEWING THE SUCCESS PAGE
     * @return \Illuminate\Http\Response
     */
    public function success_index()
    {
      if (!session('pin')) {
            return redirect('/registration');
            }

        if (!session('successpage')) {
             return redirect('/registration');
            }

        session([
            'page2'=> false,
            'page3'=> false,
            'page4'=> false,
            'page5'=> false,
            'page6'=> false,
            'successpage'=> false,
         ]);

        $pin = session('pin');

        $data = array(
            'member' => Registration::wherePin($pin)->first(),
            );

      return view('registration.success')->with($data);

    }




//######################################### MEMBERSHIP ########################################
//###############################################################################################
//###############################################################################################
//###############################################################################################
//###############################################################################################

    /**
     * VIEWING THE MEMBERSHIP PAGE
     * @return \Illuminate\Http\Response
     */
    public function membership_index()
    {
      return view('membership.membership');
    }



    /**
    * LOGIC FOR THE MEMBERSHIP PAGE
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function membership_post(MembershipRequest $request)
    {
        // $this->validate($request, [
        // 'pin' => 'required|exists:registrations|max:64',
        // ]);

        $pin = strtoupper($request->input('pin'));
        $lastname = strtoupper($request->input('lastname'));

        $member = Registration::wherePin($pin)->first();

        if($member->lastname != $lastname){
            return redirect('membership')->with('error', 'Sorry, Lastname does not own this PIN! Try Again!');
        }

        session([
            'pin' => strtoupper($request->input('pin')),
        ]);

        return redirect('/dashboard');
    }







    //TO VIEW DASHBOARD
       /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function dashboard_index()
      {
         if (!session('pin')) {
             return redirect('/logout');
         }

         $pin = session('pin');

         $data = array(
             'member' => Registration::wherePin($pin)->first(),
         );

         return view('membership.dashboard')->with($data);

      }




 //TO VIEW CHANGE INFO PAGE
      /**
       * Display a listing of the resource.
       * @return \Illuminate\Http\Response
       */
      public function changeinfo_index()
      {
          if (!session('pin')) {
              return redirect('/logout');
          }

          $pin = session('pin');

          $data = array(
              'member' => Registration::wherePin($pin)->first(),
          );

          return view('membership.changeinfo')->with($data);

      }






      //LOGIC TO VALIDATE CHANGE INFO PAGE
      /**
       * Update the specified resource in storage.
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function changeinfo_post(ChangeinfoRequest $request)
      {

          //Get variables from Session
          $id = $request->input('id');

          $title = strtoupper($request->input('title'));
          $firstname = strtoupper($request->input('firstname'));
          $lastname = strtoupper($request->input('lastname'));
          $phone = strtoupper($request->input('phone'));
          $email = strtoupper($request->input('email'));
          $sex = $request->input('sex');
          $anglican = $request->input('anglican');
          $location = $request->input('location');
          $province = $request->input('province');
          $diocese = $request->input('diocese');
          $designation = $request->input('designation');
          $church = $request->input('church');

          //Update Member
          $Registration = Registration::find($id);
          $Registration->title = $title;
          $Registration->firstname = $firstname;
          $Registration->lastname = $lastname;
          $Registration->phone = $phone;
          $Registration->email = $email;
          $Registration->sex = $sex;
          $Registration->anglican = $anglican;
          $Registration->location = $location;
          $Registration->province = $province;
          $Registration->diocese = $diocese;
          $Registration->church = $church;
          $Registration->designation = $designation;
          $Registration->save();

          return redirect('/changeinfo')->with('success', 'Member Updated Successfully!!!');
      }







    //TO VIEW CHANGE PHOTO PAGE
      /**
       * Display a listing of the resource.
       * @return \Illuminate\Http\Response
       */
      public function changephoto_index()
      {
          if (!session('pin')) {
              return redirect('/logout');
          }

          $pin = session('pin');

          $data = array(
              'member' => Registration::wherePin($pin)->first(),
          );

          return view('membership.changephoto')->with($data);

      }







      //LOGIC TO VALIDATE CHANGE PHOTO PAGE
      /**
       * Update the specified resource in storage.
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function changephoto_post(ChangephotoRequest $request)
      {
          //Get variables from Session
          $pin = session('pin');
          $Registration = Registration::wherePin($pin)->first();
          $id = $Registration->id;
          $firstname = $Registration->firstname;
          $lastname = $Registration->lastname;
          $photo = $Registration->user_photo;

          //Handle File Upload
          if($request->hasFile('fileup')){
              //Get filename with the extension
              $filenameWithExt = $request->file('fileup')->getClientOriginalName();
              //Get just filename
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
              //Get just ext
              $extension = $request->file('fileup')->getClientOriginalExtension();
              //Filename to store
              $fileNameToStore = $firstname.'_'.$lastname.'_'.$filename.'_'.time().'.'.$extension;
              //Upload Image to file
              $path = $request->file('fileup')->move(public_path('avatars'), $fileNameToStore);
              //Delete Previous file
              File::delete(public_path('avatars/').$photo);
          }


          //Create Member in database
          if($request->hasFile('fileup')){
              $Registration->user_photo = $fileNameToStore;
          }
          $Registration->save();

          return redirect('/changephoto')->with('success', 'Member Photo Changed Successfully!!!');
      }





        //TO VIEW CONTACT ADMIN
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function contactadmin_index()
            {
                if (!session('pin')) {
                    return redirect('/logout');
                }

                $pin = session('pin');

                $data = array(
                    'member' => Registration::wherePin($pin)->first(),
                );

                return view('membership.contactadmin')->with($data);

            }





        //TO LOGOUT
        /**
         * Display a listing of the resource.
         * @return \Illuminate\Http\Response
         */
        public function logout()
        {
            Session::flush();

            return redirect('/');

        }

















//######################################### ADMIN ###############################################
//###############################################################################################
//###############################################################################################
//###############################################################################################
//###############################################################################################

    /*
    |--------------------------------------------------------------------------
    | ADMIN PANEL
    |--------------------------------------------------------------------------
    |
    |
    */



//TO VIEW THE ADMIN LOGIN PAGE
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function login()
   {
       $data = array(
           'title' => 'DIVCCON ADMIN',
       );
       return view('admin.login')->with($data);
   }



//LOGIC TO VALIDATE THE ADMIN USER
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function login_post(Request $request)
  {
      $this->validate($request, [
          'username' => 'required|exists:admin|max:64',
          'password' => 'required|exists:admin|max:64',
          'role' => 'required|exists:admin|max:64',
      ]);

      $username = $request->input('username');
      $password = $request->input('password');
      $role = $request->input('role');

      $admin_member =  Admin::whereUsername($username)->first();


      if($admin_member->role != $role){
          return redirect('login')->withErrors('Sorry, you dont have permission for this role!');
      }

      if($admin_member->password != $password){
          return redirect('login')->withErrors('Sorry, the user does not own this password!');
      }

      session([
          'username' => $username,
      ]);

      if($role == "SECRETARIAT"){
          return redirect('/secretariat');
      }

      if($role == "OFFICIAL"){
          return redirect('/official');
      }


  }







  //VIEW THE SECRETARIAT DASHBOARD PAGE
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function secretariat()
  {
    if (!session('username')) {
        return redirect('/login');
    }

    $username = session('username');

    $data = array(

        'member' => Admin::whereUsername($username)->first(),

        //GENERAL STATISTICS
        'total_registered' =>  Registration::count(),
        'total_males' =>  Registration::whereSex('MALE')->count(),
        'total_females' =>  Registration::whereSex('FEMALE')->count(),
        'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
        'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
        'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
        'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
        'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
        'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
        'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
        'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
        'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
        'total_incomplete' =>  Registration::whereStatus(0)->count(),
        'total_printed' =>  Registration::wherePrinted(2)->count(),
        'total_not_printed' =>  Registration::wherePrinted(0)->count(),
        'total_waiting' =>  Registration::wherePrinted(1)->count(),
        'total_pool' =>  Registration::wherePrinted(3)->count(),
        'total_pending' =>  Registration::wherePrinted(4)->count(),



        //ALL PROVINCES
        'total_aba_province' =>  Registration::whereProvince('ABA')->count(),
        'total_abuja_province' =>  Registration::whereProvince('ABUJA')->count(),
        'total_bendel_province' =>  Registration::whereProvince('BENDEL')->count(),
        'total_enugu_province' =>  Registration::whereProvince('ENUGU')->count(),
        'total_ibadan_province' =>  Registration::whereProvince('IBADAN')->count(),
        'total_jos_province' =>  Registration::whereProvince('JOS')->count(),
        'total_kaduna_province' =>  Registration::whereProvince('KADUNA')->count(),
        'total_kwara_province' =>  Registration::whereProvince('KWARA')->count(),
        'total_lagos_province' =>  Registration::whereProvince('LAGOS')->count(),
        'total_lokoja_province' =>  Registration::whereProvince('LOKOJA')->count(),
        'total_niger_delta_province' =>  Registration::whereProvince('NIGERDELTA')->count(),
        'total_of_the_niger_province' =>  Registration::whereProvince('OFTHENIGER')->count(),
        'total_ondo_province' =>  Registration::whereProvince('ONDO')->count(),
        'total_owerri_province' =>  Registration::whereProvince('OWERRI')->count(),
        'total_institution_province' =>  Registration::whereProvince('INSTITUTION')->count(),
        'total_cana_province' =>  Registration::whereProvince('CANA')->count(),
        'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),


    );
    return view('admin.secretariat')->with($data);
  }








//VIEW THE ABUJA PROVINCE PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function abuja_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),

      //ABUJA PROVINCE (LIST OF DIOCESES)
      'total_abuja_diocese' =>  Registration::whereDiocese('ABUJA')->count(),
      'total_kafanchan_diocese' =>  Registration::whereDiocese('KAFANCHAN')->count(),
      'total_makurdi_diocese' =>  Registration::whereDiocese('MAKURDI')->count(),
      'total_otukpo_diocese' =>  Registration::whereDiocese('OTUKPO')->count(),
      'total_gwagwalada_diocese' =>  Registration::whereDiocese('GWAGWALADA')->count(),
      'total_lafia_diocese' =>  Registration::whereDiocese('LAFIA')->count(),
      'total_kubwa_diocese' =>  Registration::whereDiocese('KUBWA')->count(),
      'total_zonkwa_diocese' =>  Registration::whereDiocese('ZONKWA')->count(),
      'total_kwoi_diocese' =>  Registration::whereDiocese('KWOI')->count(),
      'total_zaki_biam_diocese' =>  Registration::whereDiocese('ZAKI-BIAM')->count(),
      'total_gboko_diocese' =>  Registration::whereDiocese('GBOKO')->count(),

  );
  return view('admin.provinces.abuja_province')->with($data);
}






//VIEW THE of_the_niger_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function of_the_niger_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),

      //OF THE NIGER PROVINCE (LIST OF DIOCESES)
      'total_on_the_niger_diocese' =>  Registration::whereDiocese('ON THE NIGER')->count(),
      'total_awka_diocese' =>  Registration::whereDiocese('AWKA')->count(),
      'total_nnewi_diocese' =>  Registration::whereDiocese('NNEWI')->count(),
      'total_aguata_diocese' =>  Registration::whereDiocese('AGUATA')->count(),
      'total_ogbaru_diocese' =>  Registration::whereDiocese('OGBARU')->count(),
      'total_ihiala_diocese' =>  Registration::whereDiocese('IHIALA')->count(),
      'total_niger_west_diocese' =>  Registration::whereDiocese('NIGER WEST')->count(),
      'total_mbamili_diocese' =>  Registration::whereDiocese('MBAMILI')->count(),
      'total_amichi_diocese' =>  Registration::whereDiocese('AMICHI')->count(),

  );
  return view('admin.provinces.of_the_niger_province')->with($data);
}









//VIEW THE niger_delta_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function niger_delta_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),


      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),

      //NIGER DELTA PROVINCE (LIST OF DIOCESES)
      'total_niger_delta_diocese' =>  Registration::whereDiocese('NIGER DELTA')->count(),
      'total_calabar_diocese' =>  Registration::whereDiocese('CALABAR')->count(),
      'total_uyo_diocese' =>  Registration::whereDiocese('UYO')->count(),
      'total_niger_north_diocese' =>  Registration::whereDiocese('NIGER DELTA NORTH')->count(),
      'total_niger_west_diocese' =>  Registration::whereDiocese('NIGER DELTA WEST')->count(),
      'total_okrika_diocese' =>  Registration::whereDiocese('OKRIKA')->count(),
      'total_ahoada_diocese' =>  Registration::whereDiocese('AHOADA')->count(),
      'total_ogoni_diocese' =>  Registration::whereDiocese('OGONI')->count(),
      'total_etche_diocese' =>  Registration::whereDiocese('ETCHE')->count(),
      'total_ikwerre_diocese' =>  Registration::whereDiocese('IKWERRE')->count(),
      'total_northern_izon_diocese' =>  Registration::whereDiocese('NORTHERN IZON')->count(),
      'total_ogbia_diocese' =>  Registration::whereDiocese('OGBIA')->count(),
      'total_evo_diocese' =>  Registration::whereDiocese('EVO')->count(),

  );
  return view('admin.provinces.niger_delta_province')->with($data);
}







//VIEW THE ibadan_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function ibadan_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),

      //IBADAN PROVINCE (LIST OF DIOCESES)
      'total_ibadan_diocese' =>  Registration::whereDiocese('IBADAN')->count(),
      'total_ilesha_diocese' =>  Registration::whereDiocese('ILESHA')->count(),
      'total_osun_diocese' =>  Registration::whereDiocese('OSUN')->count(),
      'total_ife_diocese' =>  Registration::whereDiocese('IFE')->count(),
      'total_oke_osun_diocese' =>  Registration::whereDiocese('OKE-OSUN')->count(),
      'total_ibadan_north_diocese' =>  Registration::whereDiocese('IBADAN NORTH')->count(),
      'total_ibadan_south_diocese' =>  Registration::whereDiocese('IBADAN SOUTH')->count(),
      'total_oyo_diocese' =>  Registration::whereDiocese('OYO')->count(),
      'total_ogbomoso_diocese' =>  Registration::whereDiocese('OGBOMOSO')->count(),
      'total_oke_ogun_diocese' =>  Registration::whereDiocese('OKE OGUN')->count(),
      'total_ajayi_crowther_diocese' =>  Registration::whereDiocese('AJAYI CROWTHER')->count(),
      'total_ife_east_diocese' =>  Registration::whereDiocese('IFE EAST')->count(),
      'total_osun_north_diocese' =>  Registration::whereDiocese('OSUN NORTH')->count(),
      'total_ilesha_south_diocese' =>  Registration::whereDiocese('ILESHA SOUTH')->count(),
      'total_ijesha_north_diocese' =>  Registration::whereDiocese('IJESHA NORTH')->count(),
      'total_osun_north_east_diocese' =>  Registration::whereDiocese('OSUN NORTH EAST')->count(),
      'total_ijesha_north_east_diocese' =>  Registration::whereDiocese('IJESHA NORTH EAST')->count(),
      'total_ilesha_south_west_diocese' =>  Registration::whereDiocese('ILESA SOUTH WEST')->count(),

  );
  return view('admin.provinces.ibadan_province')->with($data);
}







//VIEW THE ondo_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function ondo_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

     //GENERAL STATISTICS
     'total_registered' =>  Registration::count(),
     'total_males' =>  Registration::whereSex('MALE')->count(),
     'total_females' =>  Registration::whereSex('FEMALE')->count(),
     'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
     'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
     'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
     'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
     'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
     'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
     'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
     'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
     'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
     'total_incomplete' =>  Registration::whereStatus(0)->count(),
     'total_printed' =>  Registration::wherePrinted(2)->count(),
     'total_not_printed' =>  Registration::wherePrinted(0)->count(),
     'total_waiting' =>  Registration::wherePrinted(1)->count(),
     'total_pool' =>  Registration::wherePrinted(3)->count(),
     'total_pending' =>  Registration::wherePrinted(4)->count(),

      //ONDO PROVINCE (LIST OF DIOCESES)
      'total_ondo_diocese' =>  Registration::whereDiocese('ONDO')->count(),
      'total_ekiti_diocese' =>  Registration::whereDiocese('EKITI')->count(),
      'total_akoko_diocese' =>  Registration::whereDiocese('AKOKO')->count(),
      'total_owo_diocese' =>  Registration::whereDiocese('OWO')->count(),
      'total_akure_diocese' =>  Registration::whereDiocese('AKURE')->count(),
      'total_on_the_coast_diocese' =>  Registration::whereDiocese('ON THE COAST')->count(),
      'total_ekiti_west_diocese' =>  Registration::whereDiocese('EKITI WEST')->count(),
      'total_ekiti_oke_diocese' =>  Registration::whereDiocese('EKITI OKE')->count(),
      'total_ilaje_diocese' =>  Registration::whereDiocese('ILAJE')->count(),
      'total_irele_esedo_diocese' =>  Registration::whereDiocese('IRELE ESEDO')->count(),
      'total_ile_oluji_diocese' =>  Registration::whereDiocese('ILE-OLUJI')->count(),
      'total_ido_ani_diocese' =>  Registration::whereDiocese('IDO-ANI')->count(),

  );
  return view('admin.provinces.ondo_province')->with($data);
}








//VIEW THE kaduna_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function kaduna_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),


      //KADUNA PROVINCE (LIST OF DIOCESES)
      'total_kaduna_diocese' =>  Registration::whereDiocese('KADUNA')->count(),
      'total_kano_diocese' =>  Registration::whereDiocese('KANO')->count(),
      'total_katsina_diocese' =>  Registration::whereDiocese('KATSINA')->count(),
      'total_sokoto_diocese' =>  Registration::whereDiocese('SOKOTO')->count(),
      'total_kebbi_diocese' =>  Registration::whereDiocese('KEBBI')->count(),
      'total_dutse_diocese' =>  Registration::whereDiocese('DUTSE')->count(),
      'total_wusasa_diocese' =>  Registration::whereDiocese('WUSASA')->count(),
      'total_gusau_diocese' =>  Registration::whereDiocese('GUSAU')->count(),
      'total_zaria_diocese' =>  Registration::whereDiocese('ZARIA')->count(),
      'total_bari_diocese' =>  Registration::whereDiocese('BARI')->count(),
      'total_ikara_diocese' =>  Registration::whereDiocese('IKARA')->count(),

  );
  return view('admin.provinces.kaduna_province')->with($data);
}








//VIEW THE owerri_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function owerri_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),


      //OWERRI PROVINCE (LIST OF DIOCESES)
      'total_owerri_diocese' =>  Registration::whereDiocese('OWERRI')->count(),
      'total_orlu_diocese' =>  Registration::whereDiocese('ORLU')->count(),
      'total_mbaise_diocese' =>  Registration::whereDiocese('MBAISE')->count(),
      'total_isi_mbano_diocese' =>  Registration::whereDiocese('ISI-MBANO')->count(),
      'total_okigwe_south_diocese' =>  Registration::whereDiocese('OKIGWE SOUTH')->count(),
      'total_egbu_diocese' =>  Registration::whereDiocese('EGBU')->count(),
      'total_ideato_diocese' =>  Registration::whereDiocese('IDEATO')->count(),
      'total_ohaji_diocese' =>  Registration::whereDiocese('OHAJI/EGBEMA')->count(),
      'total_on_the_lake_diocese' =>  Registration::whereDiocese('ON THE LAKE')->count(),
      'total_oru_diocese' =>  Registration::whereDiocese('ORU')->count(),
      'total_okigwe_diocese' =>  Registration::whereDiocese('OKIGWE')->count(),
      'total_ikeduru_diocese' =>  Registration::whereDiocese('IKEDURU')->count(),

  );
  return view('admin.provinces.owerri_province')->with($data);
}







//VIEW THE bendel_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function bendel_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

     //GENERAL STATISTICS
     'total_registered' =>  Registration::count(),
     'total_males' =>  Registration::whereSex('MALE')->count(),
     'total_females' =>  Registration::whereSex('FEMALE')->count(),
     'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
     'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
     'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
     'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
     'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
     'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
     'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
     'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
     'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
     'total_incomplete' =>  Registration::whereStatus(0)->count(),
     'total_printed' =>  Registration::wherePrinted(2)->count(),
     'total_not_printed' =>  Registration::wherePrinted(0)->count(),
     'total_waiting' =>  Registration::wherePrinted(1)->count(),
     'total_pool' =>  Registration::wherePrinted(3)->count(),
     'total_pending' =>  Registration::wherePrinted(4)->count(),

      //BENDEL PROVINCE (LIST OF DIOCESES)
      'total_benin_diocese' =>  Registration::whereDiocese('BENIN')->count(),
      'total_asaba_diocese' =>  Registration::whereDiocese('ASABA')->count(),
      'total_warri_diocese' =>  Registration::whereDiocese('WARRI')->count(),
      'total_sabongida_diocese' =>  Registration::whereDiocese('SABONGIDA ORA')->count(),
      'total_ughelli_diocese' =>  Registration::whereDiocese('UGHELLI')->count(),
      'total_oleh_diocese' =>  Registration::whereDiocese('OLEH')->count(),
      'total_esan_diocese' =>  Registration::whereDiocese('ESAN')->count(),
      'total_ika_diocese' =>  Registration::whereDiocese('IKA')->count(),
      'total_western_izon_diocese' =>  Registration::whereDiocese('WESTERN IZON')->count(),
      'total_akoko_edo_diocese' =>  Registration::whereDiocese('AKOKO EDO')->count(),
      'total_etsako_diocese' =>  Registration::whereDiocese('ETSAKO')->count(),
      'total_ndokwa_diocese' =>  Registration::whereDiocese('NDOKWA')->count(),
      'total_sapele_diocese' =>  Registration::whereDiocese('SAPELE')->count(),

  );
  return view('admin.provinces.bendel_province')->with($data);
}







//VIEW THE enugu_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function enugu_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),

      //ENUGU PROVINCE (LIST OF DIOCESES)
      'total_enugu_diocese' =>  Registration::whereDiocese('ENUGU')->count(),
      'total_nsukka_diocese' =>  Registration::whereDiocese('NSUKKA')->count(),
      'total_abakaliki_diocese' =>  Registration::whereDiocese('ABAKALIKI')->count(),
      'total_oji_diocese' =>  Registration::whereDiocese('OJI RIVER')->count(),
      'total_awgu_diocese' =>  Registration::whereDiocese('AWGU/ANINRI')->count(),
      'total_enugu_north_diocese' =>  Registration::whereDiocese('ENUGU NORTH')->count(),
      'total_ngbo_diocese' =>  Registration::whereDiocese('NGBO')->count(),
      'total_ikwo_diocese' =>  Registration::whereDiocese('IKWO')->count(),
      'total_afikpo_diocese' =>  Registration::whereDiocese('AFIKPO')->count(),
      'total_nike_diocese' =>  Registration::whereDiocese('NIKE')->count(),
      'total_udi_diocese' =>  Registration::whereDiocese('UDI')->count(),
      'total_eha_amufu_diocese' =>  Registration::whereDiocese('EHA AMUFU')->count(),

  );
  return view('admin.provinces.enugu_province')->with($data);
}






//VIEW THE aba_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function aba_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

     //GENERAL STATISTICS
     'total_registered' =>  Registration::count(),
     'total_males' =>  Registration::whereSex('MALE')->count(),
     'total_females' =>  Registration::whereSex('FEMALE')->count(),
     'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
     'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
     'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
     'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
     'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
     'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
     'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
     'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
     'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
     'total_incomplete' =>  Registration::whereStatus(0)->count(),
     'total_printed' =>  Registration::wherePrinted(2)->count(),
     'total_not_printed' =>  Registration::wherePrinted(0)->count(),
     'total_waiting' =>  Registration::wherePrinted(1)->count(),
     'total_pool' =>  Registration::wherePrinted(3)->count(),
     'total_pending' =>  Registration::wherePrinted(4)->count(),

      //ABA PROVINCE (LIST OF DIOCESES)
      'total_aba_diocese' =>  Registration::whereDiocese('ABA')->count(),
      'total_umuahia_diocese' =>  Registration::whereDiocese('UMUAHIA')->count(),
      'total_ukwa_diocese' =>  Registration::whereDiocese('UKWA')->count(),
      'total_isuikwuato_diocese' =>  Registration::whereDiocese('ISUIKWUATO-UMUNNEOCHI')->count(),
      'total_arochukwu_diocese' =>  Registration::whereDiocese('AROCHUKWU')->count(),
      'total_ikwuano_diocese' =>  Registration::whereDiocese('IKWUANO')->count(),
      'total_isiala_ngwa_south_diocese' =>  Registration::whereDiocese('ISIALA NGWA SOUTH')->count(),
      'total_isiala_ngwa_diocese' =>  Registration::whereDiocese('ISIALA NGWA')->count(),
      'total_aba_ngwa_north_diocese' =>  Registration::whereDiocese('ABA NGWA NORTH')->count(),

  );
  return view('admin.provinces.aba_province')->with($data);
}








//VIEW THE kwara_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function kwara_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),

      //KWARA PROVINCE (LIST OF DIOCESES)
      'total_kwara_diocese' =>  Registration::whereDiocese('KWARA')->count(),
      'total_offa_diocese' =>  Registration::whereDiocese('OFFA')->count(),
      'total_igbomina_diocese' =>  Registration::whereDiocese('IGBOMINA')->count(),
      'total_new_bussa_diocese' =>  Registration::whereDiocese('NEW BUSSA')->count(),
      'total_omu_aran_diocese' =>  Registration::whereDiocese('OMU ARAN')->count(),
      'total_jebba_diocese' =>  Registration::whereDiocese('JEBBA')->count(),
      'total_ekiti_kwara_diocese' =>  Registration::whereDiocese('EKITI KWARA')->count(),
      'total_igbomina_west_diocese' =>  Registration::whereDiocese('IGBOMINA WEST')->count(),

  );
  return view('admin.provinces.kwara_province')->with($data);
}






//VIEW THE jos_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function jos_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(
      'title' => 'DIVCCON',
      'member' => Admin::whereUsername($username)->first(),

     //GENERAL STATISTICS
     'total_registered' =>  Registration::count(),
     'total_males' =>  Registration::whereSex('MALE')->count(),
     'total_females' =>  Registration::whereSex('FEMALE')->count(),
     'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
     'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
     'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
     'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
     'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
     'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
     'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
     'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
     'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
     'total_incomplete' =>  Registration::whereStatus(0)->count(),
     'total_printed' =>  Registration::wherePrinted(2)->count(),
     'total_not_printed' =>  Registration::wherePrinted(0)->count(),
     'total_waiting' =>  Registration::wherePrinted(1)->count(),
     'total_pool' =>  Registration::wherePrinted(3)->count(),
     'total_pending' =>  Registration::wherePrinted(4)->count(),

      //JOS PROVINCE (LIST OF DIOCESES)
      'total_jos_diocese' =>  Registration::whereDiocese('JOS')->count(),
      'total_damaturu_diocese' =>  Registration::whereDiocese('DAMATURU')->count(),
      'total_yola_diocese' =>  Registration::whereDiocese('YOLA')->count(),
      'total_maiduguri_diocese' =>  Registration::whereDiocese('MAIDUGURI')->count(),
      'total_bauchi_diocese' =>  Registration::whereDiocese('BAUCHI')->count(),
      'total_jalingo_diocese' =>  Registration::whereDiocese('JALINGO')->count(),
      'total_gombe_diocese' =>  Registration::whereDiocese('GOMBE')->count(),
      'total_pankshin_diocese' =>  Registration::whereDiocese('PANKSHIN')->count(),
      'total_bukuru_diocese' =>  Registration::whereDiocese('BUKURU')->count(),
      'total_langtang_diocese' =>  Registration::whereDiocese('LANGTANG')->count(),

  );
  return view('admin.provinces.jos_province')->with($data);
}








//VIEW THE lagos_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function lagos_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),

     //LAGOS PROVINCE (LIST OF DIOCESES)
     'total_lagos_diocese' =>  Registration::whereDiocese('LAGOS')->count(),
     'total_egba_diocese' =>  Registration::whereDiocese('EGBA')->count(),
     'total_ijebu_diocese' =>  Registration::whereDiocese('IJEBU')->count(),
     'total_remo_diocese' =>  Registration::whereDiocese('REMO')->count(),
     'total_yewa_diocese' =>  Registration::whereDiocese('YEWA')->count(),
     'total_lagos_west_diocese' =>  Registration::whereDiocese('LAGOS WEST')->count(),
     'total_badagry_diocese' =>  Registration::whereDiocese('BADAGRY')->count(),
     'total_ijegbu_north_diocese' =>  Registration::whereDiocese('IJEBU NORTH')->count(),
     'total_lagos_mainland_diocese' =>  Registration::whereDiocese('LAGOS MAINLAND')->count(),
     'total_ifo_diocese' =>  Registration::whereDiocese('IFO')->count(),
     'total_egba_west_diocese' =>  Registration::whereDiocese('EGBA WEST')->count(),
     'total_awori_diocese' =>  Registration::whereDiocese('AWORI')->count(),
     'total_ijegbu_south_west_diocese' =>  Registration::whereDiocese('IJEBU SOUTH WEST')->count(),

  );
  return view('admin.provinces.lagos_province')->with($data);
}








//VIEW THE lokoja_province PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function lokoja_province()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),

     //LOKOJA PROVINCE (LIST OF DIOCESES)
     'total_minna_diocese' =>  Registration::whereDiocese('MINNA')->count(),
     'total_lokoja_diocese' =>  Registration::whereDiocese('LOKOJA')->count(),
     'total_bida_diocese' =>  Registration::whereDiocese('BIDA')->count(),
     'total_idah_diocese' =>  Registration::whereDiocese('IDAH')->count(),
     'total_kabba_diocese' =>  Registration::whereDiocese('KABBA')->count(),
     'total_kontagora_diocese' =>  Registration::whereDiocese('KONTAGORA')->count(),
     'total_kutigi_diocese' =>  Registration::whereDiocese('KUTIGI')->count(),
     'total_ijumu_diocese' =>  Registration::whereDiocese('IJUMU')->count(),
     'total_okene_diocese' =>  Registration::whereDiocese('OKENE')->count(),
     'total_ogori_magongo_diocese' =>  Registration::whereDiocese('OGORI-MAGONGO')->count(),
     'total_doko_diocese' =>  Registration::whereDiocese('DOKO')->count(),

  );
  return view('admin.provinces.lokoja_province')->with($data);
}









//VIEW THE institutions PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function institutions()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

     //GENERAL STATISTICS
     'total_registered' =>  Registration::count(),
     'total_males' =>  Registration::whereSex('MALE')->count(),
     'total_females' =>  Registration::whereSex('FEMALE')->count(),
     'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
     'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
     'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
     'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
     'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
     'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
     'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
     'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
     'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
     'total_incomplete' =>  Registration::whereStatus(0)->count(),
     'total_printed' =>  Registration::wherePrinted(2)->count(),
     'total_not_printed' =>  Registration::wherePrinted(0)->count(),
     'total_waiting' =>  Registration::wherePrinted(1)->count(),
     'total_pool' =>  Registration::wherePrinted(3)->count(),
     'total_pending' =>  Registration::wherePrinted(4)->count(),

     //INSTITUTIONS
     'total_crowderseminary_institution' =>  Registration::whereDiocese('CROWTHER SEMINARY, ABEOKUTA')->count(),
     'total_ibru_institution' =>  Registration::whereDiocese('IBRU CENTRE, AGBARA OTTO')->count(),
     'total_trinity_institution' =>  Registration::whereDiocese('TRINITY COLLEGE, UMUAHIA')->count(),
     'total_immanuel_institution' =>  Registration::whereDiocese('IMMANUEL COLLEGE, IBADAN')->count(),
     'total_vining_institution' =>  Registration::whereDiocese('VINING COLLEGE, AKURE')->count(),
     'total_stfancis_institution' =>  Registration::whereDiocese('ST. FRANCIS OF ASSISI, WUSASA')->count(),
     'total_pauls_institution' =>  Registration::whereDiocese('ST. PAULS SEMINARY, AWKA')->count(),
     'total_crowdercollege_institution' =>  Registration::whereDiocese('CROWTHER COLLEGE, OKENE')->count(),
     'total_police_institution' =>  Registration::whereDiocese('POLICE CHAPLAINCY')->count(),
     'total_otherinstitutions_institution' =>  Registration::whereDiocese('INSTITUTION')->count(),


  );
  return view('admin.provinces.institutions')->with($data);
}









//VIEW THE cana PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function cana()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

     //GENERAL STATISTICS
     'total_registered' =>  Registration::count(),
     'total_males' =>  Registration::whereSex('MALE')->count(),
     'total_females' =>  Registration::whereSex('FEMALE')->count(),
     'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
     'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
     'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
     'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
     'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
     'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
     'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
     'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
     'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
     'total_incomplete' =>  Registration::whereStatus(0)->count(),
     'total_printed' =>  Registration::wherePrinted(2)->count(),
     'total_not_printed' =>  Registration::wherePrinted(0)->count(),
     'total_waiting' =>  Registration::wherePrinted(1)->count(),
     'total_pool' =>  Registration::wherePrinted(3)->count(),
     'total_pending' =>  Registration::wherePrinted(4)->count(),

     //CANA
     'total_cana_diocese' =>  Registration::whereDiocese('CANA')->count(),


  );
  return view('admin.provinces.cana')->with($data);
}





//VIEW THE Visitors PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function visitors()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

      //GENERAL STATISTICS
      'total_registered' =>  Registration::count(),
      'total_males' =>  Registration::whereSex('MALE')->count(),
      'total_females' =>  Registration::whereSex('FEMALE')->count(),
      'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
      'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
      'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
      'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
      'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
      'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
      'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
      'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
      'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
      'total_incomplete' =>  Registration::whereStatus(0)->count(),
      'total_printed' =>  Registration::wherePrinted(2)->count(),
      'total_not_printed' =>  Registration::wherePrinted(0)->count(),
      'total_waiting' =>  Registration::wherePrinted(1)->count(),
      'total_pool' =>  Registration::wherePrinted(3)->count(),
      'total_pending' =>  Registration::wherePrinted(4)->count(),

     //NON-ANGLICANS
     'total_visitors_diocese' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),

  );
  return view('admin.provinces.visitors')->with($data);
}






//VIEW THE ABUJA ARCHDEACONRIES PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function abuja_archdeaconries()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(

      'member' => Admin::whereUsername($username)->first(),

     //GENERAL STATISTICS
     'total_registered' =>  Registration::count(),
     'total_males' =>  Registration::whereSex('MALE')->count(),
     'total_females' =>  Registration::whereSex('FEMALE')->count(),
     'total_delegates' =>  Registration::whereDesignation('DELEGATE')->count(),
     'total_clergy' =>  Registration::whereDesignation('CLERGY')->count(),
     'total_primate' =>  Registration::whereDesignation('PRIMATE')->count(),
     'total_archbishops' =>  Registration::whereDesignation('ARCHBISHOP')->count(),
     'total_bishops' =>  Registration::whereDesignation('BISHOP')->count(),
     'total_bishops_wife' =>  Registration::whereDesignation('BISHOPS_WIFE')->count(),
     'total_visitor' =>  Registration::whereLocation('ABROAD')->orWhere("anglican", 'NON_ANGLICAN')->count(),
     'total_visitorsabroad' =>  Registration::whereLocation('ABROAD')->count(),
     'total_vistorsnigeria' =>  Registration::whereLocation('HOME')->Where("anglican", 'NON_ANGLICAN')->count(),
     'total_incomplete' =>  Registration::whereStatus(0)->count(),
     'total_printed' =>  Registration::wherePrinted(2)->count(),
     'total_not_printed' =>  Registration::wherePrinted(0)->count(),
     'total_waiting' =>  Registration::wherePrinted(1)->count(),
     'total_pool' =>  Registration::wherePrinted(3)->count(),
     'total_pending' =>  Registration::wherePrinted(4)->count(),

      //ABUJA DIOCESE (LIST OF ARCHDEACONRIES)
      'total_the_cathedral' =>  Registration::whereChurch('CATHEDRAL')->count(),
      'total_wuse' =>  Registration::whereChurch('WUSE')->count(),
      'total_asokoro' =>  Registration::whereChurch('ASOKORO')->count(),
      'total_maitama' =>  Registration::whereChurch('MAITAMA')->count(),
      'total_gudu' =>  Registration::whereChurch('GUDU')->count(),
      'total_durumi' =>  Registration::whereChurch('DURUMI')->count(),
      'total_mpape' =>  Registration::whereChurch('MPAPE')->count(),
      'total_gwarinpa' =>  Registration::whereChurch('GWARINPA')->count(),
      'total_kabusa' =>  Registration::whereChurch('KABUSA')->count(),


  );
  return view('admin.provinces.abuja_archdeaconries')->with($data);
}






//TO VIEW THE ALL SEARCH
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function search()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(
      'member' => Admin::whereUsername($username)->first(),
      'members_count' =>  Registration::all()->count(),
      'members' =>  Registration::all(),
  );
  return view('admin.search.search')->with($data);

}









//TO VIEW THE SEARCH BY OPTION PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function search_by_option()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(
      'member' => Admin::whereUsername($username)->first(),
  );
  return view('admin.search.search_by_option')->with($data);

}






//LOGIC TO SEARCH BY OPTION PAGE
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function search_by_option_post(Request $request)
{
  if (!session('username')) {
      return redirect('/login');
  }

  $this->validate($request, [
      'value' => 'required|max:64',
      'search' => 'required|max:64',
  ]);

  $value = strtoupper($request->input('value'));
  $search = $request->input('search');

  $username = session('username');

  switch($search){
            case "id":
                $members =  Registration::whereId($value)->get();
                break;
            case "pin":
                $members =  Registration::wherePin($value)->get();
                break;
            case "title":
                $members =  Registration::whereTitle($value)->get();
                break;
            case "firstname":
                $members =  Registration::whereFirstname($value)->get();
                break;
            case "lastname":
                $members =  Registration::whereLastname($value)->get();
                break;
            case "phone":
                $members =  Registration::wherePhone($value)->get();
                break;
            case "email":
                $members =  Registration::whereEmail($value)->get();
                break;
            case "sex":
                $members =  Registration::whereSex($value)->get();
                break;
            case "anglican":
                $members =  Registration::whereAnglican($value)->get();
                break;
            case "location":
                $members =  Registration::whereLocation($value)->get();
                break;
            case "province":
                $members =  Registration::whereProvince($value)->get();
                break;
            case "diocese":
                $members =  Registration::whereDiocese($value)->get();
                break;
            case "church":
                $members =  Registration::whereChurch($value)->get();
                break;
            case "designation":
                $members =  Registration::whereDesignation($value)->get();
                break;
            case "committee":
                $members =  Registration::whereCommittee($value)->get();
                break;
  }

  $members_count =  $members->count();

  $data = array(
      'members' => $members,
      'members_count' => $members_count,
      'member' => Admin::whereUsername($username)->first(),
  );

  return view('admin.search.search_by_option_result')->with($data);

}











//VIEW EDIT_CHANGEINFO INTRO PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function edit_changeinfo_intro()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(
      'member' => Admin::whereUsername($username)->first(),
  );
  return view('admin.edit.edit_changeinfo_intro')->with($data);

}












//LOGIC TO EDIT_CHANGEINFO INTRO PAGE
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function post_changeinfo_intro(Request $request)
{
  if (!session('username')) {
      return redirect('/login');
  }

  if($request->input('id')){
    $this->validate($request, [
        'id' => 'required|exists:registrations|max:64',
      ]);

      $id = $request->input('id');

      $member = Registration::whereId($id)->first();

      if(!$member->id){
          return redirect('admin.edit.edit_changeinfo_intro')->withError('ID is not in the Database!');
      }

      $pin = $member->pin;

      session([
          'pin' => $pin,
      ]);

      return redirect('/edit_changeinfo');

  }

  if($request->input('pin')){
    $this->validate($request, [
        'pin' => 'required|exists:registrations|max:64',
      ]);

      $pin =  strtoupper($request->input('pin'));

      $member = Registration::wherePin($pin)->first();

      if(!$member->pin){
          return redirect('admin.edit.edit_changeinfo_intro')->withError('PIN is not in the Database!');
      }

      session([
          'pin' => $pin,
      ]);

      return redirect('/edit_changeinfo');

  }


}










//VIEW EDIT_CHANGEINFO PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function edit_changeinfo()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');
  $pin = session('pin');

  $data = array(
      'member' => Registration::wherePin($pin)->first(),
  );
  return view('admin.edit.edit_changeinfo')->with($data);

}







//LOGIC FOR EDIT_CHANGEINFO PAGE
/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function post_changeinfo(Request $request)
{
    $this->validate($request, [
        'title' => 'required|max:64',
        'firstname' => 'required|max:64',
        'lastname' => 'required|max:64',
        'phone' => 'required|max:18',
        'email' => 'required|email|max:64',
        'sex' => 'required',
        'province' => 'required',
    ]);

    $id = $request->input('id');

    //Get variables from input
    $title = strtoupper($request->input('title'));
    $firstname = strtoupper($request->input('firstname'));
    $lastname = strtoupper($request->input('lastname'));
    $phone = strtoupper($request->input('phone'));
    $email = strtoupper($request->input('email'));
    $sex = $request->input('sex');
    $location = $request->input('location');
    $anglican = $request->input('anglican');
    $province = $request->input('province');
    $diocese = $request->input('diocese');
    $church = $request->input('church');
    $designation = $request->input('designation');

    //Update Member
    $Registration = Registration::find($id);
    $Registration->title = $title;
    $Registration->firstname = $firstname;
    $Registration->lastname = $lastname;
    $Registration->phone = $phone;
    $Registration->email = $email;
    $Registration->sex = $sex;
    $Registration->location = $location;
    $Registration->anglican = $anglican;
    $Registration->province = $province;
    $Registration->diocese = $diocese;
    $Registration->church = $church;
    $Registration->designation = $designation;
    $Registration->printed = 3;
    $Registration->save();

    return redirect('/edit_changeinfo')->with('success', 'Member Updated Successfully!!!');
}










//VIEW EDIT_CHANGEPHOTO PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function edit_changephoto()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(
      'member' => Admin::whereUsername($username)->first(),
  );
  return view('admin.edit.edit_changephoto')->with($data);

}






//LOGIC FOR EDIT_CHANGEPHOTO PAGE
/**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function post_changephoto(Request $request)
  {
    if (!session('username')) {
        return redirect('/login');
    }

    if($request->input('id')){
        $this->validate($request, [
            'user_photo' => 'required|image|mimes:jpeg,png,jpg|max:6048',
            'id' => 'required|exists:registrations|max:6',
        ]);

        $id = $request->input('id');

        $Registration = Registration::whereId($id)->first();
        $firstname = $Registration->firstname;
        $lastname = $Registration->lastname;
        $photo = $Registration->user_photo;

        //Handle File Upload
            if($request->hasFile('user_photo')){
                //Get filename with the extension
                $filenameWithExt = $request->file('user_photo')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('user_photo')->getClientOriginalExtension();
                //Filename to store
                $fileNameToStore = $firstname.'_'.$lastname.'_'.$filename.'_'.time().'.'.$extension;
                //Upload Image to file
                $path = $request->file('user_photo')->move(public_path('avatars'), $fileNameToStore);
                //Delete Previous file
                File::delete(public_path('avatars/').$photo);
            }

        //Create Member in database
            if($request->hasFile('user_photo')){
                $Registration->user_photo = $fileNameToStore;
                $Registration->printed = 3;
            }
            $Registration->save();

    }



    if($request->input('pin')){
        $this->validate($request, [
            'user_photo' => 'required|image|mimes:jpeg,png,jpg|max:6048',
            'pin' => 'required|exists:registrations|max:6',
        ]);

        $pin = strtoupper($request->input('pin'));

        $Registration = Registration::wherePin($pin)->first();
        $firstname = $Registration->firstname;
        $lastname = $Registration->lastname;
        $photo = $Registration->user_photo;
        $id = $Registration->id;

        //Handle File Upload
            if($request->hasFile('user_photo')){
                //Get filename with the extension
                $filenameWithExt = $request->file('user_photo')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('user_photo')->getClientOriginalExtension();
                //Filename to store
                $fileNameToStore = $firstname.'_'.$lastname.'_'.$filename.'_'.time().'.'.$extension;
                //Upload Image to file
                $path = $request->file('user_photo')->move(public_path('avatars'), $fileNameToStore);
                //Delete Previous file
                File::delete(public_path('avatars/').$photo);
            }

        //Create Member in database
            if($request->hasFile('user_photo')){
                $Registration->user_photo = $fileNameToStore;
                $Registration->printed = 3;
            }
            $Registration->save();

    }

    return redirect('/edit_changephoto')->with('success', 'Member Photo Changed Successfully!!!');

  }
















//VIEW THE EDIT_CHANGE COMMITTEE PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function edit_changecommittee()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(
      'member' => Admin::whereUsername($username)->first(),
  );
  return view('admin.edit.edit_changecommittee')->with($data);

}





//LOGIC FOR EDIT_CHANGE COMMITTEE PAGE
/**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function post_changecommittee(Request $request)
  {
        if($request->input('ids')){
                $this->validate($request, [
                    'ids' => 'required',
                    'committee' => 'required|max:191',
                    ]);

                //Get variables from input
                $ids = $request->input('ids');
                $committee = $request->input('committee');
                $ids = str_replace(' ','',$ids);
                $ides = explode(",",$ids);

                //uPDATE Member in database
                foreach ($ides as $id) {
                    $member = Registration::whereId($id)->first();
                    if(!empty($member)){
                        $id = $member->id;
                        $Registration = Registration::find($id);
                        $Registration->committee = $committee;
                        $Registration->printed = 3;
                        $Registration->save();
                    }else{
                        return redirect('/edit_changecommittee')->with('error', 'Member ID ('.$id.') is not in the database!!!');
                    }

                }

                unset($id); // break the reference with the last element
        }

        if($request->input('pins')){
                $this->validate($request, [
                    'pins' => 'required',
                    'committee' => 'required|max:191',
                    ]);

                //Get variables from input
                $pins = strtoupper($request->input('pins'));
                $committee = $request->input('committee');
                $pins = str_replace(' ','',$pins);
                $pines = explode(",",$pins);

                //uPDATE Member in database
                foreach ($pines as $pin) {
                    $member = Registration::wherePin($pin)->first();
                    if(!empty($member)){
                        $id = $member->id;
                        $Registration = Registration::find($id);
                        $Registration->committee = $committee;
                        $Registration->printed = 3;
                        $Registration->save();
                    }else{
                        return redirect('/edit_changecommittee')->with('error', 'Member PIN ('.$pin.') is not in the database!!!');
                    }

                }

                unset($pin); // break the reference with the last element

        }


      return redirect('/edit_changecommittee')->with('success', 'Member Committee Changed Successfully!!!');
  }














  //TO VIEW NEW REGISTRATION PAGE
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function edit_new_registration()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(
      'member' => Admin::whereUsername($username)->first(),
  );
  return view('admin.edit.edit_new_registration')->with($data);

}





// LOGIC FOR NEW REGISTRATION
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function post_new_registration(Request $request)
{
  $this->validate($request, [
      'pin' => 'required|unique:registrations|exists:pins|max:64',
      'title' => 'required|max:64',
      'firstname' => 'required|max:64',
      'lastname' => 'required|max:64',
      'phone' => 'required|max:18',
      'email' => 'required|email|max:64',
      'sex' => 'required',
      'anglican' => 'required',
      'location' => 'required',
      'province' => 'required',
      'diocese' => 'required',
      'user_photo' => 'required|image|mimes:jpeg,png,jpg|max:6048',
  ]);


  //Get variables
  $pin = strtoupper($request->input('pin'));
  $title = strtoupper($request->input('title'));
  $firstname = strtoupper($request->input('firstname'));
  $lastname = strtoupper($request->input('lastname'));
  $phone = strtoupper($request->input('phone'));
  $email = strtoupper($request->input('email'));
  $sex = $request->input('sex');
  $anglican = $request->input('anglican');
  $location = $request->input('location');
  $province = $request->input('province');
  $diocese = $request->input('diocese');
  $church = $request->input('church');
  $designation = $request->input('designation');
  $committee = $request->input('committee');


  //Handle File Upload
  if($request->hasFile('user_photo')){
    //Get filename with the extension
    $filenameWithExt = $request->file('user_photo')->getClientOriginalName();
    //Get just filename
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //Get just ext
    $extension = $request->file('user_photo')->getClientOriginalExtension();
    //Filename to store
    $fileNameToStore = $pin.'_'.$firstname.'_'.$lastname.'_'.$filename.'_'.time().'.'.$extension;
    //Upload Image to file
    //$path = $request->file('user_photo')->storeAs('avatars', $fileNameToStore);
    $path = $request->file('user_photo')->move(public_path('avatars'), $fileNameToStore);
}else {
    $fileNameToStore = 'noimage.jpg';
}

    //Check current date
    $t = strtotime("Today");

    //set time boundaries
    $e_start =strtotime("April 01, 2020");
    $e_end =strtotime("August 21, 2020");

    $m_start =strtotime("August 22, 2020");
    $m_end =strtotime("October 09, 2020");

    $l_start =strtotime("October 10, 2020");
    $l_end =strtotime("November 14, 2020");

    $c_start =strtotime("November 15, 2020");
    $c_end =strtotime("November 20, 2020");

    //set time batch
    switch (TRUE) {
        case ($e_start <= $t && $t <= $e_end):
            $batch = 1;
            break;
        case ($m_start <= $t && $t <= $m_end):
            $batch = 2;
            break;
        case ($l_start <= $t && $t <= $l_end):
            $batch = 3;
            break;
        case ($c_start <= $t && $t <= $c_end):
            $batch = 4;
            break;
        default:
            $batch = 0;
        }

    //set null values
    switch ($diocese) {
        case "":
            $diocese = "NULL";
            break;
        }
    switch ($church) {
        case "":
            $church = "NULL";
            break;
        }
    switch ($designation) {
        case "":
            $designation = "NULL";
            break;
        }


    //Create Member in database
    $Registration = new Registration;
    $Registration->pin = $pin;
    $Registration->title = $title;
    $Registration->firstname = $firstname;
    $Registration->lastname = $lastname;
    $Registration->phone = $phone;
    $Registration->email = $email;
    $Registration->sex = $sex;
    $Registration->anglican = $anglican;
    $Registration->location = $location;
    $Registration->province = $province;
    $Registration->diocese = $diocese;
    $Registration->church = $church;
    $Registration->designation = $designation;
    $Registration->user_photo = $fileNameToStore;
    $Registration->batch = $batch;
    $Registration->status = 1;
    $Registration->printed = 3;
    $Registration->save();

    return redirect('edit_new_registration')->with('success', 'Registered Successfully!!!');


}











//TO VIEW SEND TO POOL
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function edit_send_to_pool()
{
  if (!session('username')) {
      return redirect('/login');
  }

  $username = session('username');

  $data = array(
      'member' => Admin::whereUsername($username)->first(),
  );
  return view('admin.edit.edit_send_to_pool')->with($data);

}






// LOGIC FOR SEND TO POOL
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function post_send_to_pool(Request $request)
{
    if($request->input('ids')){
            $this->validate($request, [
                'ids' => 'required',
                'pool' => 'required',
                ]);

            //Get variables from input
            $ids = $request->input('ids');
            $printed = $request->input('pool');
            $ids = str_replace(' ','',$ids);
            $ides = explode(",",$ids);

            //uPDATE Member in database
            foreach ($ides as $id) {
                $member = Registration::whereId($id)->first();
                if(!empty($member)){
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = $printed;
                    $Registration->save();
                }else{
                    return redirect('/edit_send_to_pool')->with('error', 'Member ID ('.$id.') is not in the database!!!');
                }

            }

            unset($id); // break the reference with the last element
    }

    if($request->input('pins')){
            $this->validate($request, [
                'pins' => 'required',
                'pool' => 'required',
                ]);

            //Get variables from input
            $pins = strtoupper($request->input('pins'));
            $printed = $request->input('pool');
            $pins = str_replace(' ','',$pins);
            $pines = explode(",",$pins);

            //uPDATE Member in database
            foreach ($pines as $pin) {
                $member = Registration::wherePin($pin)->first();
                if(!empty($member)){
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = $printed;
                    $Registration->save();
                        // DB::table('registrations')->where('pin', $pin)->update(['committee' => $committee]);
                }else{
                    return redirect('/edit_send_to_pool')->with('error', 'Member PIN ('.$pin.') is not in the database!!!');
                }

            }

            unset($pin); // break the reference with the last element

    }


  return redirect('/edit_send_to_pool')->with('success', 'Member Sent Successfully!!!');
}


















//######################################### PRINT ###############################################
//###############################################################################################
//###############################################################################################
//###############################################################################################
//###############################################################################################




//TO VIEW THE PRINT_BY_OPTION PAGE
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function print_by_option()
  {
      if (!session('username')) {
          return redirect('/login');
      }

      $username = session('username');

      $data = array(
          'member' => Admin::whereUsername($username)->first(),
      );
      return view('admin.print.print_by_option')->with($data);

  }




//LOGIC TO VALIDATE FOR THE PRINT BY ID
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_by_id(Request $request)
{
    if($request->input('ids')){
            $this->validate($request, [
                'ids' => 'required',
                'search' => 'required',
                ]);

            //Get variables from input
            $ids = $request->input('ids');
            $search = $request->input('search');
            $ids = str_replace(' ','',$ids);
            $ides = explode(",",$ids);

            //Search and SET each Member in database
            foreach ($ides as $id) {
                    $member = Registration::whereId($id)->first();
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = 1;
                    $Registration->save();

            }

            unset($id); // break the reference with the last element

            $username = session('username');
            $data = array(
                'members' => Registration::wherePrinted(1)->get(),
                'member' => Admin::whereUsername($username)->first(),
            );

            return view('admin.print.print_by_id')->with($data);
    }

}





//LOGIC FOR CONFIRM PRINT PAGE
/**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function confirm_print(Request $request)
  {
      //Get variables from Session
      $mems = Registration::wherePrinted(1)->get();

      foreach ($mems as $mem) {
           $mem->printed = 2;
           $mem->save();
      }

      return redirect('/print_by_option')->with('success', 'Print Confirmed Successfully!!!');
  }



//LOGIC FOR RESET PRINT PAGE
/**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function reset_print(Request $request)
 {
     //Get variables from Session
     $mems = Registration::wherePrinted(1)->get();

     foreach ($mems as $mem) {
          $mem->printed = 0;
          $mem->save();
     }

     return redirect('/print_by_option')->with('success', 'Print Reset Successfully!!!');
 }









//LOGIC TO VALIDATE FOR THE PRINT BY PIN
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_by_pin(Request $request)
{
    if($request->input('pins')){
            $this->validate($request, [
                'pins' => 'required',
                'search' => 'required',
                ]);

            //Get variables from input
            $pins = $request->input('pins');
            $search = $request->input('search');
            $pins = str_replace(' ','',$pins);
            $pines = explode(",",$pins);

            //Search and SET each Member in database
            foreach ($pines as $pin) {
                    $member = Registration::wherePin($pin)->first();
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = 1;
                    $Registration->save();

            }

            unset($id); // break the reference with the last element

            $username = session('username');
            $data = array(
                'members' => Registration::wherePrinted(1)->get(),
                'member' => Admin::whereUsername($username)->first(),
            );

            return view('admin.print.print_by_pin')->with($data);
    }

}





//LOGIC TO VALIDATE FOR THE PRINT BY PROVINCE PAGE
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_by_province(Request $request)
{
    if($request->input('value')){
            $this->validate($request, [
                'value' => 'required',
                'search' => 'required',
                ]);

            //Get variables from input
            $value = $request->input('value');
            $search = $request->input('search');

            //Search and SET each Member in database
            $members = Registration::where($search, $value)->wherePrinted(0)->get();
            $mycount = $members->count();
            if($mycount == 0){
                return redirect('/print_by_option')->with('error', 'No available Member for printing!!!');
            }else{
                foreach ($members as $member) {
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = 1;
                    $Registration->save();
                }
            }

            unset($id); // break the reference with the last element

            $username = session('username');
            $data = array(
                'members' => Registration::wherePrinted(1)->get(),
                'member' => Admin::whereUsername($username)->first(),
            );

            return view('admin.print.print_by_province')->with($data);
    }

}






//LOGIC TO VALIDATE FOR THE PRINT BY DIOCESE PAGE
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_by_diocese(Request $request)
{
    if($request->input('value')){
            $this->validate($request, [
                'value' => 'required',
                'search' => 'required',
                ]);

            //Get variables from input
            $value = $request->input('value');
            $search = $request->input('search');

            //Search and SET each Member in database
            $members = Registration::where($search, $value)->wherePrinted(0)->get();
            $mycount = $members->count();
            if($mycount == 0){
                return redirect('/print_by_option')->with('error', 'No available Member for printing!!!');
            }else{
                foreach ($members as $member) {
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = 1;
                    $Registration->save();
                }
            }

            unset($id); // break the reference with the last element

            $username = session('username');
            $data = array(
                'members' => Registration::wherePrinted(1)->get(),
                'member' => Admin::whereUsername($username)->first(),
            );

            return view('admin.print.print_by_diocese')->with($data);
    }

}






//LOGIC TO VALIDATE FOR THE PRINT BY CHURCH
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_by_church(Request $request)
{
    if($request->input('value')){
            $this->validate($request, [
                'value' => 'required',
                'search' => 'required',
                ]);

            //Get variables from input
            $value = $request->input('value');
            $search = $request->input('search');

            //Search and SET each Member in database
            $members = Registration::where($search, $value)->wherePrinted(0)->get();
            $mycount = $members->count();
            if($mycount == 0){
                return redirect('/print_by_option')->with('error', 'No available Member for printing!!!');
            }else{
                foreach ($members as $member) {
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = 1;
                    $Registration->save();
                }
            }

            unset($id); // break the reference with the last element

            $username = session('username');
            $data = array(
                'members' => Registration::wherePrinted(1)->get(),
                'member' => Admin::whereUsername($username)->first(),
            );

            return view('admin.print.print_by_church')->with($data);
    }

}





//LOGIC TO VALIDATE FOR THE PRINT BY DESIGNATION
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_by_designation(Request $request)
{
    if($request->input('value')){
            $this->validate($request, [
                'value' => 'required',
                'search' => 'required',
                ]);

            //Get variables from input
            $value = $request->input('value');
            $search = $request->input('search');

            //Search and SET each Member in database
            $members = Registration::where($search, $value)->wherePrinted(0)->get();
            $mycount = $members->count();
            if($mycount == 0){
                return redirect('/print_by_option')->with('error', 'No available Member for printing!!!');
            }else{
                foreach ($members as $member) {
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = 1;
                    $Registration->save();
                }
            }

            unset($id); // break the reference with the last element

            $username = session('username');
            $data = array(
                'members' => Registration::wherePrinted(1)->get(),
                'member' => Admin::whereUsername($username)->first(),
            );

            return view('admin.print.print_by_designation')->with($data);
    }

}




//LOGIC TO VALIDATE FOR THE PRINT BY COMMITTEE
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_by_committee(Request $request)
{
    if($request->input('value')){
            $this->validate($request, [
                'value' => 'required',
                'search' => 'required',
                ]);

            //Get variables from input
            $value = $request->input('value');
            $search = $request->input('search');

            //Search and SET each Member in database
            $members = Registration::where($search, $value)->wherePrinted(0)->get();
            $mycount = $members->count();
            if($mycount == 0){
                return redirect('/print_by_option')->with('error', 'No available Member for printing!!!');
            }else{
                foreach ($members as $member) {
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = 1;
                    $Registration->save();
                }
            }

            unset($id); // break the reference with the last element

            $username = session('username');
            $data = array(
                'members' => Registration::wherePrinted(1)->get(),
                'member' => Admin::whereUsername($username)->first(),
            );

            return view('admin.print.print_by_committee')->with($data);
    }

}







   //TO VIEW THE UNPRINT_BY_OPTION PAGE
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function unprint_by_option()
  {
      if (!session('username')) {
          return redirect('/login');
      }

      $username = session('username');

      $data = array(
          'member' => Admin::whereUsername($username)->first(),
      );
      return view('admin.print.unprint_by_option')->with($data);

  }





//LOGIC TO VALIDATE FOR THE UNPRINT BY DIOCESE PAGE
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function unprint_by_diocese(Request $request)
{
    if($request->input('value')){
            $this->validate($request, [
                'value' => 'required',
                'search' => 'required',
                ]);

            //Get variables from input
            $value = $request->input('value');
            $search = $request->input('search');

            //Search and SET each Member in database
            $members = Registration::where($search, $value)->get();
            $mycount = $members->count();
            if($mycount == 0){
                return redirect('/unprint_by_option')->with('error', 'No available Member for unprinting!!!');
            }else{
                foreach ($members as $member) {
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = 0;
                    $Registration->save();
                }
            }

            unset($id); // break the reference with the last element


            return redirect('/unprint_by_option')->with('success', 'Unprint Reset Successfully!!!');
    }

}





//LOGIC TO VALIDATE FOR THE UNPRINT BY CHURCH
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function unprint_by_church(Request $request)
{
    if($request->input('value')){
            $this->validate($request, [
                'value' => 'required',
                'search' => 'required',
                ]);

            //Get variables from input
            $value = $request->input('value');
            $search = $request->input('search');

            //Search and SET each Member in database
            $members = Registration::where($search, $value)->get();
            $mycount = $members->count();
            if($mycount == 0){
                return redirect('/unprint_by_option')->with('error', 'No available Member for unprinting!!!');
            }else{
                foreach ($members as $member) {
                    $id = $member->id;
                    $Registration = Registration::find($id);
                    $Registration->printed = 0;
                    $Registration->save();
                }
            }

            unset($id); // break the reference with the last element


            return redirect('/unprint_by_option')->with('success', 'Unprint Reset Successfully!!!');
    }

}





//LOGIC TO VIEW THE PRINT_FROM_POOL PAGE
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function print_from_pool()
  {

    $username = session('username');

    $members_count =  Registration::wherePrinted(3)->get()->count();

    $data = array(
        'members' => Registration::wherePrinted(3)->get(),
        'members_count' => $members_count,
        'member' => Admin::whereUsername($username)->first(),
    );
      return view('admin.print.print_from_pool')->with($data);

  }



//LOGIC TO VALIDATE PRINT FROM POOL 2
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_from_pool2(Request $request)
{
    $print_all = $request->input('print_all');

    if (isset($print_all))
        {
            $members = Registration::wherePrinted(3)->get();

            foreach ($members as $member) {
                $id = $member->id;
                $Registration = Registration::find($id);
                $Registration->select = 3;
                $Registration->save();
            }

            $data = array(
                'members' => Registration::whereSelect(3)->get(),
                'members_count' => Registration::whereSelect(3)->get()->count(),
            );
            return view('admin.print.print_from_pool2')->with($data);
        }

    if (!empty($request->input('print_id')))
        {
            $ides = $request->input('print_id');

            foreach ($ides as $id) {

                $Registration = Registration::find($id);
                $Registration->select = 3;
                $Registration->save();
            }

            $data = array(
                'members' => Registration::whereSelect(3)->get(),
                'members_count' => Registration::whereSelect(3)->get()->count(),
            );
            return view('admin.print.print_from_pool2')->with($data);

        }else{
            return redirect('/print_from_pool')->with('error', 'Please Select an input!');
        }



}



//LOGIC FOR CONFIRM PRINT POOL PAGE
/**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function confirm_print_pool(Request $request)
  {
      //Get variables from Session
      $mems = Registration::whereSelect(3)->get();

      foreach ($mems as $mem) {
           $mem->printed = 2;
           $mem->select = 2;
           $mem->save();
      }

      return redirect('/print_from_pool')->with('success', 'Print Confirmed Successfully!!!');
  }



//LOGIC FOR RESET PRINT POOL PAGE
/**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function reset_print_pool(Request $request)
 {
     //Get variables from Session
     $mems = Registration::whereSelect(3)->get();

     foreach ($mems as $mem) {
          $mem->printed = 3;
          $mem->select = 0;
          $mem->save();
     }

     return redirect('/print_from_pool')->with('success', 'Print Reset Successfully!!!');
 }






 //LOGIC TO VIEW THE PRINT_FROM_WAITING PAGE
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function print_from_waiting()
  {

    $username = session('username');

    $members_count =  Registration::wherePrinted(1)->get()->count();

    $data = array(
        'members' => Registration::wherePrinted(1)->get(),
        'members_count' => $members_count,
        'member' => Admin::whereUsername($username)->first(),
    );
      return view('admin.print.print_from_waiting')->with($data);

  }





//LOGIC TO VALIDATE PRINT FROM WAITING 2
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_from_waiting2(Request $request)
{
    $print_all = $request->input('print_all');

    if (isset($print_all))
        {
            $members = Registration::wherePrinted(1)->get();

            foreach ($members as $member) {
                $id = $member->id;
                $Registration = Registration::find($id);
                $Registration->select = 1;
                $Registration->save();
            }

            $data = array(
                'members' => Registration::whereSelect(1)->get(),
                'members_count' => Registration::whereSelect(1)->get()->count(),
            );
            return view('admin.print.print_from_waiting2')->with($data);
        }

    if (!empty($request->input('print_id')))
        {
            $ides = $request->input('print_id');

            foreach ($ides as $id) {

                $Registration = Registration::find($id);
                $Registration->select = 1;
                $Registration->save();
            }

            $data = array(
                'members' => Registration::whereSelect(1)->get(),
                'members_count' => Registration::whereSelect(1)->get()->count(),
            );
            return view('admin.print.print_from_waiting2')->with($data);

        }else{
            return redirect('/print_from_waiting')->with('error', 'Please Select an input!');
        }



}



//LOGIC FOR CONFIRM PRINT WAITING PAGE
/**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function confirm_print_waiting(Request $request)
  {
      //Get variables from Session
      $mems = Registration::whereSelect(1)->get();

      foreach ($mems as $mem) {
           $mem->printed = 2;
           $mem->select = 2;
           $mem->save();
      }

      return redirect('/print_from_waiting')->with('success', 'Print Confirmed Successfully!!!');
  }



//LOGIC FOR RESET PRINT WAITING PAGE
/**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function reset_print_waiting(Request $request)
 {
     //Get variables from Session
     $mems = Registration::whereSelect(1)->get();

     foreach ($mems as $mem) {
          $mem->printed = 1;
          $mem->select = 0;
          $mem->save();
     }

     return redirect('/print_from_waiting')->with('success', 'Print Reset Successfully!!!');
 }







//LOGIC TO VIEW THE PRINT_FROM_PENDING PAGE
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function print_from_pending()
  {

    $username = session('username');

    $members_count =  Registration::wherePrinted(4)->get()->count();

    $data = array(
        'members' => Registration::wherePrinted(4)->get(),
        'members_count' => $members_count,
        'member' => Admin::whereUsername($username)->first(),
    );
      return view('admin.print.print_from_pending')->with($data);

  }



//LOGIC TO VALIDATE PRINT FROM PENDING 2
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_from_pending2(Request $request)
{
    $print_all = $request->input('print_all');

    if (isset($print_all))
        {
            $members = Registration::wherePrinted(4)->get();

            foreach ($members as $member) {
                $id = $member->id;
                $Registration = Registration::find($id);
                $Registration->select = 4;
                $Registration->save();
            }

            $data = array(
                'members' => Registration::whereSelect(4)->get(),
                'members_count' => Registration::whereSelect(4)->get()->count(),
            );
            return view('admin.print.print_from_pending2')->with($data);
        }

    if (!empty($request->input('print_id')))
        {
            $ides = $request->input('print_id');

            foreach ($ides as $id) {

                $Registration = Registration::find($id);
                $Registration->select = 4;
                $Registration->save();
            }

            $data = array(
                'members' => Registration::whereSelect(4)->get(),
                'members_count' => Registration::whereSelect(3)->get()->count(),
            );
            return view('admin.print.print_from_pending2')->with($data);

        }else{
            return redirect('/print_from_pending')->with('error', 'Please Select an input!');
        }



}



//LOGIC FOR CONFIRM PRINT PENDING PAGE
/**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function confirm_print_pending(Request $request)
  {
      //Get variables from Session
      $mems = Registration::whereSelect(4)->get();

      foreach ($mems as $mem) {
           $mem->printed = 2;
           $mem->select = 2;
           $mem->save();
      }

      return redirect('/print_from_pending')->with('success', 'Print Confirmed Successfully!!!');
  }



//LOGIC FOR RESET PRINT PENDING PAGE
/**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function reset_print_pending(Request $request)
 {
     //Get variables from Session
     $mems = Registration::whereSelect(4)->get();

     foreach ($mems as $mem) {
          $mem->printed = 4;
          $mem->select = 0;
          $mem->save();
     }

     return redirect('/print_from_pending')->with('success', 'Print Reset Successfully!!!');
 }








//LOGIC TO VIEW THE PRINT_FROM_NOT-PRINTED PAGE
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function print_from_notprinted()
  {

    $username = session('username');

    $members_count =  Registration::wherePrinted(0)->get()->count();

    $data = array(
        'members' => Registration::wherePrinted(0)->get(),
        'members_count' => $members_count,
        'member' => Admin::whereUsername($username)->first(),
    );
      return view('admin.print.print_from_notprinted')->with($data);

  }



//LOGIC TO VALIDATE PRINT FROM NOT-PRINTED 2
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function print_from_notprinted2(Request $request)
{
    $print_all = $request->input('print_all');

    if (isset($print_all))
        {
            $members = Registration::wherePrinted(0)->get();

            foreach ($members as $member) {
                $id = $member->id;
                $Registration = Registration::find($id);
                $Registration->select = 5;
                $Registration->save();
            }

            $data = array(
                'members' => Registration::whereSelect(5)->get(),
                'members_count' => Registration::whereSelect(5)->get()->count(),
            );
            return view('admin.print.print_from_notprinted2')->with($data);
        }

    if (!empty($request->input('print_id')))
        {
            $ides = $request->input('print_id');

            foreach ($ides as $id) {

                $Registration = Registration::find($id);
                $Registration->select = 5;
                $Registration->save();
            }

            $data = array(
                'members' => Registration::whereSelect(5)->get(),
                'members_count' => Registration::whereSelect(5)->get()->count(),
            );
            return view('admin.print.print_from_notprinted2')->with($data);

        }else{
            return redirect('/print_from_notprinted')->with('error', 'Please Select an input!');
        }



}



//LOGIC FOR CONFIRM PRINT NOT-PRINTED PAGE
/**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function confirm_print_notprinted(Request $request)
  {
      //Get variables from Session
      $mems = Registration::whereSelect(5)->get();

      foreach ($mems as $mem) {
           $mem->printed = 2;
           $mem->select = 2;
           $mem->save();
      }

      return redirect('/print_from_notprinted')->with('success', 'Print Confirmed Successfully!!!');
  }



//LOGIC FOR RESET PRINT NOT-PRINTED PAGE
/**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function reset_print_notprinted(Request $request)
 {
     //Get variables from Session
     $mems = Registration::whereSelect(5)->get();

     foreach ($mems as $mem) {
          $mem->printed = 0;
          $mem->select = 0;
          $mem->save();
     }

     return redirect('/print_from_notprinted')->with('success', 'Print Reset Successfully!!!');
 }








  /*
    |--------------------------------------------------------------------------
    | EXTRA
    |--------------------------------------------------------------------------
    |
    |
    */


    //TO WEB
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function web()
  {

      return Redirect('http://www.divccon.com');

  }


















}
