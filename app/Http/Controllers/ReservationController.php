<?php

namespace App\Http\Controllers;
use App\Event;
use App\Bookinginfo;
use App\PaymentEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
class ReservationController extends Controller
{

    public function home($sort = "desc"){
      $eventIds =  PaymentEvent::where('user_id',Auth::id())->orderBy('id', $sort)->pluck('event_id')->toArray();
      
      $events = Event::whereIn('id',$eventIds)->get();
      return view('home')->withEvents($events);
    }


    public function addToCart($id){
      session()->push('item_ids',$id);
      return response()->json(['message' => 'successful']);
    }

    public function checkoutView(){
      $eventIds = session()->get('item_ids');
      $events = Event::whereIn('id',[$eventIds])->get();
      return view('checkout',compact('events'));
    }

    public function checkout(){
      $eventIds = session()->get('item_ids');

      foreach($eventIds as $eventId){
        $events = PaymentEvent::create([
                                'user_id' => Auth::id(),
                                'event_id' => $eventId
                                ]
                              );
        $ev= Event::where('id',$eventId)->first();
        $ev->tickets = $ev->tickets - 1;
        $ev->save();

      }
      session()->forget('item_ids');
     return response()->json(['message' => 'successful']);
    }
    
    
     
}
