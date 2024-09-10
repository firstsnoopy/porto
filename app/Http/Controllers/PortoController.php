<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Profile;
use App\Models\Projects;
use App\Models\Tentang_Saya;
use Illuminate\Http\Request;
use Nette\Schema\Elements\Base;

class PortoController extends Controller
{
    public function intro()
    {
        $intro = Profile::first();
        return view('portofolio.intro', compact('intro'));
    }

    public function about()
    {
        $about = Tentang_Saya::all();
        $desk = Tentang_Saya::first();

        return view('portofolio.about', compact('about', 'desk'));
    }

    public function works()
    {
        $works = Projects::all();
        return view('portofolio.works', compact('works'));
    }

    public function contact()
    {
        $contact = Kontak::first();
        $intro = Profile::all();
        return view('portofolio.contact', compact('contact', 'intro'));
    }

    public function navbar()
    {
        $navbar = Profile::first();
        return view('portofolio.base', compact('navbar'));
    }

    public function base()
    {
        return view('portofolio.base');
    }

}
