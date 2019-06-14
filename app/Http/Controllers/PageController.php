<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $user =DB::select('select * from passenger where user_name=:name',['name'=>'saiful']);
        return view('pages.dashboard',['user'=>$user]);
    }

    public function train_routes()
    {
        $routes = DB::select('select * from routes');
        return view('pages.train_routes',['routes'=>$routes]);
    }


    public function purchaseTicket()
    {
        $stations_from = DB::select('select distinct source from routes');

        $stations_to = DB::select('select distinct destination from routes');

        return view('pages.purchase_ticket',['sources'=>$stations_from],['destinations'=>$stations_to]);
    }


    public function purchaseTicketQuery(Request $request)
    {
    
        $sour = $request->station_from;   
        $destina =$request->station_to;
        $date    = $request->journey_date;
        $cla   = $request->seat_status; 

        $trainID = DB::select('select train_id from routes inner join train_activity on routes.route_id = train_activity.route_id and routes.source =:source and routes.destination =:destina and train_activity.departure_date =:date',['date'=>$date,'source'=>$sour,'destina'=>$destina]);
           //  $id = $trainID->train_id;
           // $trainName = DB::select('select train_name from train_info where train_id=:id',['id'=>$id]);
            
        return redirect('purchase_query_show');
        
    }

     public function purchaseTicketQueryShow()
     {
        // $train_name = Session->get('trainName');
        // $train_name= {{ session()->get( 'trainName' ) }}

        return view('Query.purchase_ticket_query');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
