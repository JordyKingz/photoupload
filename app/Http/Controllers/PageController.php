<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PageController extends Controller
{
  public function index()
  {
    $portfolio = Portfolio::all();

    // foreach($portfolio as $i){
    //   echo $i->id;
    // }

    return view('frontend.homepage', array(
      'portfolios' => $portfolio
    ));
  }
}
