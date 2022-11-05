<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_data = DB::table('arro_hudai_users')->get();
        return view('user.index',compact('user_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fillable = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        DB::table('arro_hudai_users')->insert($fillable); 
        return redirect()->to(url('user'));
        // NO NEED FOR $user_data = DB::table('arro_hudai_users')->get(); 
        // INDEX IS CALLED AT return redirect()->to(url('user'));
        // return view('user.index', compact('user_data'));
        // this view method is bugged. it loads the page
        // but reloading it with add the previous data again to the database
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $userS = DB::table('arro_hudai_users')->where('ID','=',$id)->get();
        $data = DB::table('arro_hudai_users')->where('ID','=',$id)->first();
        return view('user.profile', ['users'=>$userS, 'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('arro_hudai_users')->where('ID','=',$id)->first();
        return view('user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // $user = DB::table('arro_hudai_users')->where('ID','=',$id)->get();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->phone = $request->phone;

    public function update(Request $request, $id)
    {
        
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        DB::table('arro_hudai_users')->where('ID','=',$id)->update($user);
        return redirect()->to(url('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('arro_hudai_users')->where('ID','=',$id)->delete();

        return redirect()->to(url('user'));
    }
}
