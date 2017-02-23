<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use Session;
use App\Floors;
use App\User;
use App\UserFloor;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
	{
		return view('admin.registration');
    }
	

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\RegistrationRequest $request)
    {
       $input=$request->except('floor');
	   $input['password'] = Hash::make($request->password);
		
        $user=User::create($input);
		
		if($user){
			foreach($request->floor as $row){
				
				$user_floor = new UserFloor();
				$user_floor->user_id = $user->id;
				$user_floor->floor_id = $row;
				$user_floor->save();
			}
			
			$msg='agent Created Successfully.....';
            Session::flash('success', $msg);
			return Redirect::to('agent-details');
            
		}else{
			$msg='Proccess Failed...';
            Session::flash('error', $msg);
            return Redirect::back();
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
    }

	public function Login(){
				
		if (Auth::attempt(['email' => \Request::get('email'), 'password' => \Request::get('password')])){
			if(Auth::user()->status=='Active'){
				Session::flash('success', "Logged In");
				return Redirect::to('dashboard');
			}else{
				Auth::logout();
				Session::flash('message', "Contact Admin to Active Your Account");
				return Redirect::back();
			}
			
		}else{
			Session::flash('message', "Invalid Login Details.");
			return Redirect::back();
		}
	}
	
	public function getSignOut()
	{
		Auth::logout();	
		return Redirect::to('/');
	}
	
	public function staffList()
	{
		$user = User::where('id', '!=', 1)->paginate(10);
		return view('admin.staff_list', ['user' => $user]);
	}

	public function ChangeStatus($id){
		if($id){
			
			$user = User::find($id);

			echo $user->status;
			if($user->status=='Active'){
				$user->status = 'InActive';
			}else{
				$user->status = 'Active';
			}
			
			if($user->save()){
				$msg='Status Changed Successfully.....';
				Session::flash('success', $msg);
				return Redirect::back();
			}else{
				$msg='Proccess Failed...';
				Session::flash('error', $msg);
				return Redirect::back();
			}
		}
		
	}
}
