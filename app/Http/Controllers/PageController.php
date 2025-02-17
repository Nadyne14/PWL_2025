<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index() {
    	    return 'Selamat Datang';
	}
    public function about() {
        return 'Nadyne Rosalia, 2341760142';
    }
    public function articles($id) {
        return "Halaman artikel dengan ID $id";
    }
}
