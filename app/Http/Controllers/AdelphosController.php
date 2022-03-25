<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Album;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Nav;
use App\Models\Pic;
use App\Models\Trust;
use Illuminate\Http\Request;
use View;

class AdelphosController extends Controller
{
    public function home()
    {
        $about = About::all();
        $pic = Pic::all();
        $contact = Contact::all();
        $trust = Trust::all();
        $home = Home::all();
        $nav = Nav::all();
        $album = Album::all();
        return view('home', [
            'abouts' => $about,
            'pics' => $pic,
            'contacts' => $contact,
            'trusts' => $trust,
            'homes' => $home,
            'navs' => $nav,
            'albums' => $album
        ]);
    }

    public function albumcat()
    {
        return view('albumcat');
    }
}
