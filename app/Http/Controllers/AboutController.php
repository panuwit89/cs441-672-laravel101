<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $content = "<a href='https://sci.ku.ac.th'>Computer Science</a>";
        return view('about.index', ['content' => $content]); // ไม่ใช้ / ใช้ . (dot notation)
    }
}
