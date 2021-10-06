<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_EngineerDocumentsTools extends Controller
{
    public function openPage(){
    	//Autentikasi level user yg boleh msk
    	$userLevel = auth()->user()->id_ulevel;
        if($userLevel == 3 || $userLevel == 5 || $userLevel == 10){
    		return view('Pages.Engineer.View_EngineerDocumentsTools', compact('userLevel'));
        }
        else{
            return redirect('/logout');
        }
    }

}
