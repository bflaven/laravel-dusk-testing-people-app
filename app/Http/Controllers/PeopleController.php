<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
 
use Session;
 
use App\People;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$people = People::all();
        
        // using paginate function to show 3 news items per page    
        $itemsPerPage = 3;
        $people = People::orderBy('created_at', 'desc')->paginate($itemsPerPage);
        
        return view('people.index', array('people' => $people, 'title' => 'People Display'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people.create', array('title' => 'Add Person'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, array(
                                'fullname' => 'required',
                                'email' => 'required',
                                'username' => 'required',
                                'bio' => 'required',
                            )
                        );
        
        $input = $request->all();
        //dd($input); // dd() helper function is print_r alternative
        
        People::create($input);
        
        Session::flash('flash_message', 'Person added successfully!');
 
        //return redirect()->back();
        //return redirect('people');
        return redirect()->route('people.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $people = People::where('id', $id)->first();
        return view('people.show', array('people' => $people));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people = People::findOrFail($id);
 
        return view('people.edit', array('people' => $people, 'title' => 'Edit Person'));
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
        $people = People::findOrFail($id);
 
        $this->validate($request, array(
                                'fullname' => 'required',
                                'email' => 'required',
                                'username' => 'required',
                                'bio' => 'required',
                            )
                        );
 
        $input = $request->all();
 
        $people->fill($input)->save();
 
        Session::flash('flash_message', 'Person updated successfully!');
 
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $people = People::findOrFail($id);
 
        $people->delete();
 
        Session::flash('flash_message', 'Person deleted successfully!');
 
        return redirect()->route('people.index');


    }
}
