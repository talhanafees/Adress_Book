<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function Index()
    {
        return View('Client.ContactUs.Index');
    }

}
