<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class LanguageController extends Controller
{
   /* public function change($lang)
    {
        $session = session();
        $request = service('request'); // Mevcut URL'yi almak için
        
        // Desteklenen diller listesi
        $availableLanguages = ['tr', 'en', 'de'];

        if (in_array($lang, $availableLanguages)) {
            $session->set('site_lang', $lang);
        }

        // Kullanıcının geldiği sayfaya yönlendir
        $referer = $request->getServer('HTTP_REFERER') ?? base_url();
        return redirect()->to($referer);
    }*/
    public function change($lang)
    {
        $session = session();
        $availableLanguages = ['tr', 'en', 'de'];
    
        if (in_array($lang, $availableLanguages)) {
            $session->set('site_lang', $lang);
        }
    
        // Session içeriğini log dosyasına yazdıralım
        log_message('debug', 'Dil değiştirildi: ' . $session->get('site_lang'));
    
        return redirect()->back();
    }
    
}
