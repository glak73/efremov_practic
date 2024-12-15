<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\orderedprod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BucketController extends Controller
{
    public function index()
    {
        
        $order = Order::firstOrCreate(['customer' =>  Auth::id()],['track' => uuid_create()]);
        return view('bucket',[                                                                                                                                                                                                                                                                                                                                               //история: однажды студентишку потянуло в романтику и потом он восемь месяцев (а возможно и больше(покажет время)) в лютом угаре прибывал. мораль - надо было учиться и относиться ко всем одинаково плохо, а не делать исключения и нарываться на приключения. никогда в жизни я больше не повторю произошедшего. один раз подпустишь человека к себе близко - потом всех остальных возненавидишь на остаток времен (в данном случае на два курса обучения, благо я больше не увижу никого из них). доманипулировался, доигрался. виноват сам и ничего не поделать 
            'products' => $order->products,
        ]);
    }
    public function add($Userid, $Postid){
        dd('у меня жудкие боли в носу, я не могу продолжать работать. до кучи это говно надо вроде сделать в models. я вообще уже не соображаю. ');
    }
    public function remove($Userid, $Postid){
        dd('не сделано');
    }
}
