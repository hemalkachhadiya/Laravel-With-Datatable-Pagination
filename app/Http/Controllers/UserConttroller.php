<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserConttroller extends Controller {

    public function index() {
        $users = User::paginate( 5 );
        return view(
            'users.index',
            compact(
                'users'
            )
        );
    }

    public function list( Request $request ) {
        $jsonArray = array();
        $jsonArray['draw'] = intval($request->input('draw'));

        $columns = array(
            0 => 'name',
            1 => 'email',
            2 => 'phone',
            3 => 'created_at'
        );

        $column = $columns[$request->order[0]['column']];
        $dir = $request->order[0]['dir'];
        $offset = $request->start;
        $limit = $request->length;
        $users = new User();
        $jsonArray['recordsTotal'] = $users->count();
        if($request->search['value']){
            $search = $request->search['value'];
            $users = $users->where(function ($query) use ($search) {
                $query->orWhere('name', 'like', "%{$search}%");
                $query->orWhere('email', 'like', "%{$search}%");
                $query->orWhere('phone', 'like', "%{$search}%");
            });
        }
        $jsonArray['recordsFiltered'] = $users->count();
        $users = $users->orderby($column,$dir)->offset($offset)->limit($limit)->get();
        $jsonArray['data'] = array();
        foreach($users as $user){
            $jsonObject = array();
            $jsonObject[] = $user->name;
            $jsonObject[] = $user->email;
            $jsonObject[] = $user->phone;
            $jsonObject[] = $user->created_at->format('d F Y');
            $jsonObject[] = '<button class="px-2 py-1 bg-red-400 hover:bg-red-600 rounded text-white" onclick="deleteData('.$user->id.')"> Delete </button>';
            $jsonArray['data'][] = $jsonObject;
        }
        echo json_encode($jsonArray);
    }

    public function create() {
        return view(
            'users.create'
        );
    }

    public function store( Request $request ) {
        $request->validate( [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'password' => 'required|min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:8',
        ] );

        $store = $request->only( 'name', 'email', 'phone' );
        $store['password'] = Hash::make( $request->password );
        $store['password_base64'] = base64_encode( $request->password );
        $user = User::create( $store );
        return redirect()->route( 'user.index' )->with( 'success', 'Record added successfully.' );
        ;
    }

    public function show( $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        return $user = User::find( $id )->delete();
    }
}
