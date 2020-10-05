<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Exception;
use App\Cases;
use App\Country;
use App\View;

class PageController extends Controller
{
    public function view_coronavirus()
    {
    	$order = 3;
        $mayor = \DB::table('countries')->max('count');
    	$cases = \DB::table('countries')->where('count', $mayor)->orderBy('confirmed', 'DESC')->paginate(300);
        $view = View::find(1);
        $save = $view->visit + 1;
        \DB::table('views')->where('id', $view->id)->update(['visit'=>$save]);
        $people = \DB::table('views')->max('visit');
        $visit = $people * 3;
        $co = \DB::table('countries')->where('count', $mayor)->count('country');
        $countries = number_format($co, 0, '', '.');
        $in = \DB::table('countries')->where('count', $mayor)->sum('confirmed');
        $infected = number_format($in, 0, '', '.');
        $re = \DB::table('countries')->where('count', $mayor)->sum('recovered');
        $recovered = number_format($re, 0, '', '.');
        $de = \DB::table('countries')->where('count', $mayor)->sum('deaths');
        $deaths = number_format($de, 0, '', '.');
        return view('coronavirus', compact('cases', 'order', 'visit', 'countries', 'infected', 'recovered', 'deaths'));
    }

    public function filter_coronavirus(Request $request)
    {
        $view = View::find(1);
        $save = $view->visit + 1;
        \DB::table('views')->where('id', $view->id)->update(['visit'=>$save]);
        $people = \DB::table('views')->max('visit');
        $visit = $people * 3;
        $mayor = \DB::table('countries')->max('count');
    	if($request->order == 1){
    		$cases = \DB::table('countries')->where('count', $mayor)->orderBy('country', 'ASC')->paginate(300);
    	}
    	else if($request->order == 2){
    		$cases = \DB::table('countries')->where('count', $mayor)->orderBy('country', 'DESC')->paginate(300);
    	}
    	else if($request->order == 3){
    		$cases = \DB::table('countries')->where('count', $mayor)->orderBy('confirmed', 'DESC')->paginate(300);
    	}
    	else if($request->order == 4){
    		$cases = \DB::table('countries')->where('count', $mayor)->orderBy('confirmed', 'ASC')->paginate(300);
    	}
    	else if($request->order == 5){
    		$cases = \DB::table('countries')->where('count', $mayor)->orderBy('recovered', 'DESC')->paginate(300);
    	}
    	else if($request->order == 6){
    		$cases = \DB::table('countries')->where('count', $mayor)->orderBy('recovered', 'ASC')->paginate(300);
    	}
    	else if($request->order == 7){
    		$cases = \DB::table('countries')->where('count', $mayor)->orderBy('deaths', 'DESC')->paginate(300);
    	}
    	else if($request->order == 8){
    		$cases = \DB::table('countries')->where('count', $mayor)->orderBy('deaths', 'ASC')->paginate(300);
    	}
        else if($request->order == 9){
            $cases = \DB::table('countries')->where('count', $mayor)->orderBy('percent_recovered', 'DESC')->paginate(300);
        }
        else if($request->order == 10){
            $cases = \DB::table('countries')->where('count', $mayor)->orderBy('percent_recovered', 'ASC')->paginate(300);
        }
        else if($request->order == 11){
            $cases = \DB::table('countries')->where('count', $mayor)->orderBy('percent_deaths', 'DESC')->paginate(300);
        }
        else if($request->order == 12){
            $cases = \DB::table('countries')->where('count', $mayor)->orderBy('percent_deaths', 'ASC')->paginate(300);
        }
        else if($request->order == 13){
            $cases = \DB::table('countries')->where('count', $mayor)->orderBy('percent_undefined', 'DESC')->paginate(300);
        }
        else if($request->order == 14){
            $cases = \DB::table('countries')->where('count', $mayor)->orderBy('percent_undefined', 'ASC')->paginate(300);
        }
    	$order = $request->order;
        $co = \DB::table('countries')->where('count', $mayor)->count('country');
        $countries = number_format($co, 0, '', '.');
        $in = \DB::table('countries')->where('count', $mayor)->sum('confirmed');
        $infected = number_format($in, 0, '', '.');
        $re = \DB::table('countries')->where('count', $mayor)->sum('recovered');
        $recovered = number_format($re, 0, '', '.');
        $de = \DB::table('countries')->where('count', $mayor)->sum('deaths');
        $deaths = number_format($de, 0, '', '.');
        return view('coronavirus', compact('cases', 'order', 'visit', 'countries', 'infected', 'recovered', 'deaths'));
    }

    public function view_detail($id)
    {
        $view = View::find(1);
        $save = $view->visit + 1;
        \DB::table('views')->where('id', $view->id)->update(['visit'=>$save]);
        $people = \DB::table('views')->max('visit');
        $visit = $people * 3;
        $newid = Crypt::decrypt($id);
        $country = \DB::table('countries')->where('country', $newid)->orderBy('date', 'DESC')->paginate(300);
        $mayor = \DB::table('countries')->max('count');
        $cases = \DB::table('countries')->where('country', $newid)->where('count', $mayor)->get();
        foreach($cases as $case){
           $actives = $case->confirmed - ($case->recovered + $case->deaths);
           $confirmed = $case->confirmed;
           $recovered = $case->recovered;
           $deaths = $case->deaths;
        }
        $menos1 = $mayor - 1;
        $cases1 = \DB::table('countries')->where('country', $newid)->where('count', $menos1)->get();
        foreach($cases1 as $case1){
           $tconfirmed = $confirmed - $case1->confirmed;
           $trecovered = $recovered - $case1->recovered;
           $tdeaths = $deaths - $case1->deaths;
        }
        return view('detalle', compact('country', 'visit', 'newid', 'actives', 'tconfirmed', 'trecovered', 'tdeaths'));
    }

    public function view_admin($id)
    {
    	if($id == "nexuz-159753258456ÑPanch*"){
            $people = \DB::table('views')->max('visit');
            $visit = $people * 3;
    		return view('admin', compact('visit'));
    	}
    	else{
    		return redirect('coronavirus');
    	}
    }

    public function process_data(Request $request, $id)
    {
        try{
            if($id == "nexuz-159753258456ÑPanch*"){
            $cases = \DB::table('cases')->get();
            $inserted = array();
            foreach($cases as $case){
                if(in_array($case->country_region, $inserted)){
                    //
                }
                else{
                    $auxs = \DB::table('cases')->where('country_region', $case->country_region)->get();
                    $plusconfirmed = 0;
                    $plusrecovered = 0;
                    $plusdeaths = 0;
                    foreach($auxs as $aux){
                        $result = str_replace("\r", "", $aux->deaths);
                        $plusconfirmed = $plusconfirmed + intval($aux->confirmed);
                        $plusrecovered = $plusrecovered + intval($aux->recovered);
                        $plusdeaths = $plusdeaths + intval($result);
                    }
                    if($plusconfirmed == 0){
                        $percentrecovered = 0;
                        $percentdeaths = 0;
                    }else{
                       $percentrecovered = $plusrecovered / $plusconfirmed;
                        $percentdeaths = $plusdeaths/ $plusconfirmed; 
                    }                   
                    $percentundefined = 1 - ($percentrecovered + $percentdeaths);
                    $country = new Country;
                    $country->count = $request->count;
                    $country->country = $case->country_region;
                    $fechacortada = explode("-", $request->fecha);
                    $fecha = $fechacortada[2] . "/" . $fechacortada[1] . "/" . $fechacortada[0];
                    $country->date = $fecha;
                    $country->lat = $case->lat;
                    $country->long = $case->long_;
                    $country->confirmed = $plusconfirmed;
                    $country->recovered = $plusrecovered;
                    $country->deaths = $plusdeaths;
                    $country->percent_recovered = round($percentrecovered * 100, 1);
                    $country->percent_deaths = round($percentdeaths * 100, 1);
                    $country->percent_undefined = round($percentundefined * 100, 1);
                    $country->save();
                    array_push($inserted, $case->country_region);
                }
            }
            return redirect('coronavirus');
        }
        else{
            return redirect('coronavirus');
        }
        }catch(Exception $ex){
            dd($ex);
            return redirect('coronavirus');
        } 
    	
    }
}
