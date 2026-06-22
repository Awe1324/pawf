<?php

namespace App\Controllers;

class Language extends BaseController
{
    public function switch($locale)
    {
        session()->set('lang', $locale);
        return redirect()->back();
    }
}