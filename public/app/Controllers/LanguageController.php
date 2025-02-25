<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class LanguageController extends Controller
{
    public function change($lang)
    {
        $session = session();

        // Desteklenen diller listesi
        $availableLanguages = ['tr', 'en', 'de'];

        if (in_array($lang, $availableLanguages)) {
            $session->set('site_lang', $lang);
        }

        return redirect()->back();
    }
}
