<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agency;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:ROLE_ADMIN');
    }



    public function manageAgencies()
    {
        $agencies = Agency::all();
        return view('admin.agency', compact('agencies'));
    }

    // home
    public function index()
    {
        //$tickets = Ticket::where('user_id', auth()->user()->id)->get();
        
        return view('admin.adminHome',compact('agencies'));
    }

    // Create 
    public function create()
    {
        return view('admin.create');
    }

    // Store
    public function store(Request $request)
    {
        $agency = new Agency();
        $data = $this->validate($request, [
            'name'=> 'required'
        ]);
       
        $agency->saveAgency($data);
        return redirect('/manage-agancies')->with('success', 'New support agency has been created! Wait sometime to get resolved');
    }

    ///////////////////////////////////// Edit \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function edit($id)
    {
        $agency = Agency::where('id', $id)
                        ->first();

        return view('admin.edite', compact('agency', 'id'));
    } 

    // Update
    
    public function update(Request $request, $id)
    {
        $agency = new Agency();
        $data = $this->validate($request, [
            'name'=> 'required'
        ]);
        $data['id'] = $id;
        $agency->updateAgency($data);

        return redirect('/manage-agancies')->with('success', 'New support agency has been updated!!');
    }

    // Destroy
    public function destroy($id)
    {
        $agency = Agency::find($id);
        $agency->delete();

        return redirect('/manage-agancies')->with('success', 'Agency has been deleted!!');
    }
}
