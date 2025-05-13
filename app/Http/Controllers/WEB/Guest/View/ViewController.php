<?php

namespace App\Http\Controllers\WEB\Guest\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    protected $data = array();

    public function __construct()
    {
        $this->data['dir_view'] = '';
        $this->data['title'] = 'Home';
    }

    public function index()
    {
        $ref = $this->data;

        return view($this->data['dir_view'] . 'index', compact('ref'));
    }

    public function about()
    {
        $ref = $this->data;
        $ref['title'] = 'Tentang PLAI BMD';

        return view($this->data['dir_view'] . 'index', compact('ref'));
    }

    public function cta()
    {
        $ref = $this->data;
        $ref['title'] = 'CTA';

        return view($this->data['dir_view'] . 'index', compact('ref'));
    }
}
