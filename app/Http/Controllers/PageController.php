<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){



        return view('index');
    }

    public function about_us(){



        return view('about_us');
    }


    public function contact_us(){



        return view('contact_us');
    }

    public function services(){



        return view('services');
    }

    public function our_process(){



        return view('our_process');
    }

    public function accommodation(){



        return view('accommodation');
    }

    public function join_now(){



        return view('join_now');
    }

}


