<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Player as PlayerResource;
use App\Models\Player;
use App\Http\Resources\PlayerCollection;
use Validator;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PlayerCollection(Player::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request ->validate([
        //     'firstname'=>'required|max:255',
        //     'lastname'=>'required|max:255',
        //     'nationality'=>'required|max:255',
        //     'dob'=>'required|max:255',
        //     'age'=>'required|max:255',
        //     'shirtno'=>'required|max:255',
        //     'position'=>'required|max:255',
        //     'strongest_foot'=>'required|max:255',
        //     'former_club'=>'required|max:255',
        //     'bio'=>'required|max:255'
        // ]);
        // $player = Player::create($request->all());

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'nationality' => 'required|max:255',
            'dob' => 'required|max:255',
            'age' => 'required|max:255',
            'shirt_no' => 'required|max:255',
            'position' => 'required|max:255',
            'strongest_foot' => 'required|max:255',
            'former_club' => 'required|max:255',
            'bio' => 'required|max:255'
        ]);

        if ($validator->fails()){
            $response = array('response'=>$validator->messages(),'success'=>false);
            return $response;
        }else{
            $player=new Player();
            $player->first_name=$request->input('first_name');
            $player->last_name=$request->input('last_name');
            $player->nationality=$request->input('nationality');
            $player->dob=$request->input('dob');
            $player->age=$request->input('age');
            $player->shirt_no=$request->input('shirt_no');
            $player->position=$request->input('position');
            $player->strongest_foot=$request->input('strongest_foot');
            $player->former_club=$request->input('former_club');
            $player->bio=$request->input('bio');
            $player->save();
        }

            return (new PlayerResource($player))->response()->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return new PlayerResource(Player::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'nationality' => 'required|max:255',
            'dob' => 'required|max:255',
            'age' => 'required|max:255',
            'shirt_no' => 'required|max:255',
            'position' => 'required|max:255',
            'strongest_foot' => 'required|max:255',
            'former_club' => 'required|max:255',
            'bio' => 'required|max:255'
        ]);

        if ($validator->fails()){
            $response = array('response'=>$validator->messages(),'success'=>false);
            return $response;
        }else{
            $player=Player::find($id);
            $player->first_name=$request->input('first_name');
            $player->last_name=$request->input('last_name');
            $player->nationality=$request->input('nationality');
            $player->dob=$request->input('dob');
            $player->age=$request->input('age');
            $player->shirt_no=$request->input('shirt_no');
            $player->position=$request->input('position');
            $player->strongest_foot=$request->input('strongest_foot');
            $player->former_club=$request->input('former_club');
            $player->bio=$request->input('bio');
            $player->save();
        }

            return (new PlayerResource($player))->response()->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return reponse()->json(null, 204);
    }
}
