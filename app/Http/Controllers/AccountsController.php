<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Candidate;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::all();
        
        return view('candidate.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidate.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $candidate = new candidate([
    //       'title' => $request->get('title'),
    //       'post' => $request->get('post')
    //     ]);

    //     $candidate->save();
    //     return redirect('/candidate');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     return $id;
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
        
        $candidate = Candidate::find($id);
        return view('candidate.edit')
                ->with('candidate', $candidate);
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
        $candidates = Candidate::find($id);
        $candidates->name = $request->input('name');
        $candidates->email = $request->input('email');
        $candidates->password = $request->input('password');
        $candidates->dob = $request->input('dob');
        $candidates->gender = $request->input('gender');
        $candidates->country = $request->input('country');
        $candidates->mobile = $request->input('mobile');
        $candidates->address = $request->input('address');
        $candidates->save();
        return redirect('/account')->with('response', 'Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $candidate = App\Candidate::find($id);
      $candidate->delete();

      return redirect('/account')->with('response', 'Delete Successfully');
    }
}
