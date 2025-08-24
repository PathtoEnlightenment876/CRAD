<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviserPanelController extends Controller
{
    public function create()
    {
        
          // Pass any data needed to the view
          return view('add-panel-adviser', [
            'pageTitle' => 'Adviser and Panel'
        ]);  
         
          return view('assign-panel-adviser', [
            'pageTitle' => 'Adviser and Panel'
        ]);
        
           return view('view-assigns', [
            'pageTitle' => 'Current Assignments'
        ]);
       
    }
}
