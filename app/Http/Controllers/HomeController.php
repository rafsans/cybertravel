<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', array('title' => 'Home'));
    }

    public function wisata()
    {
        return view('pages.wisata', array('title' => 'Wisata'));
    }

    public function wilayah()
    {
        return view('pages.wilayah', array('title' => 'Wilayah'));
    }

    public function about()
    {
        return view('pages.about', array('title' => 'Tentang Kami'));
    }
    public function contactUs()
    {
        return view('pages.contactUs', array('title' => 'Kontak'));
    }

    public function review()
    {
        return view('pages.review', array('title' => 'Review'));
    }

    public function login()
    {
        return view('pages.login', array('title' => 'Login'));
    }

    public function register()
    {
        return view('pages.register', array('title' => 'Register'));
    }

    public function dashboard()
    {
        $email = Session::get('email');
        $user = User::where('email', $email)->first();
        return view('pages.dashboardAccount', array('title' => 'Dashboard', 'user' => $user));
    }

    public function wdestinasi1()
    {
        return view('pages.wdestinasi1', array('title' => 'Wisata'));
    }

    public function wpenginapan1()
    {
        return view('pages.wpenginapan1', array('title' => 'Wisata'));
    }

    public function wkuliner1()
    {
        return view('pages.wkuliner1', array('title' => 'Wisata'));
    }

    public function wdestinasi2()
    {
        return view('pages.wdestinasi2', array('title' => 'Wisata'));
    }

    public function wpenginapan2()
    {
        return view('pages.wpenginapan2', array('title' => 'Wisata'));
    }

    public function wkuliner2()
    {
        return view('pages.wkuliner2', array('title' => 'Wisata'));
    }

    public function wkuliner3()
    {
        return view('pages.wkuliner3', array('title' => 'Wisata'));
    }

    public function wkuliner4()
    {
        return view('pages.wkuliner4', array('title' => 'Wisata'));
    }

    public function wjogja()
    {
        return view('pages.wjogja', array('title' => 'Wilayah'));
    }

    public function wmalioboro()
    {
        return view('pages.wmalioboro', array('title' => 'Wilayah'));
    }

    public function wkhayangan()
    {
        return view('pages.wkhayangan', array('title' => 'Wilayah'));
    }

    public function wbakmimbah()
    {
        return view('pages.wbakmimbah', array('title' => 'Wilayah'));
    }

    public function wbakmimbah2()
    {
        return view('pages.wbakmimbah2', array('title' => 'Wilayah'));
    }
}
