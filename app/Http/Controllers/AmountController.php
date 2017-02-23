<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Amount;
use Session;
use Redirect;

class AmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	
    	$amount = Amount::all()->toArray();	
		return view('admin.set_amount', ['amount' => $amount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\SetAmountRequest $request)
    {
		$input = $request->all();
		$amount = Amount::updateOrCreate(['id' => 1],$input);
		
		if($amount){
			$msg='Commission Added Successfully.....';
            Session::flash('success', $msg);
			return Redirect::to('amount'	);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if(Amount::where('id', $id)->delete()){
			$msg='Deleted Successfully...';
				Session::flash('success', $msg);
				return Redirect::to('amount-details');
		}else{
			$msg='Something Wrong';
			Session::flash('error', $msg);
			return Redirect::back();
		}
    }
	
	public function AmountView()
    {
        $amount = Amount::paginate(10);
		return view('admin.set_amount', ['amount' => $amount]);
    }
	
	public function AjaxDuration(){
		
		$type = \Request::get('type');
		if($type==1){
			$limit = 24;
		}else if($type==2){
			$limit = 31;
		}
		
		$list = Amount::where('duration_type', $type)->lists('upto');
		if($list){
			$list = $list->toArray();
		}
		$content="<option value=''>choose</option>";
		for($i=1;$i<=$limit;$i++){
			if(!in_array($i, $list)){
				$content.="<option value=".$i.">".$i."</option>";
			}
		}
		
		return $content;
	}
}
