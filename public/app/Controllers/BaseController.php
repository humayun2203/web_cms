<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use CodeIgniter\I18n\Time;
use CodeIgniter\Language\Language;


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = service('session');
    }

     /* protected function initialize()
    {
        $session = session();
    
        // Eğer session içinde dil tanımlı değilse, varsayılan olarak tr'yi ata
        if (!$session->has('site_lang')) {
            $session->set('site_lang', 'tr');
        }
    
        // Session'dan dili al
        $lang = $session->get('site_lang');
    
        // Log ekleyerek kontrol edelim
        log_message('debug', 'Sayfa Açıldığında Seçili Dil: ' . $lang);
    
        // CodeIgniter’ın dilini değiştir
        service('request')->setLocale($lang);
    
        // CodeIgniter'ın çeviri servisini çağırarak dili değiştir
        $languageService = \Config\Services::language();
        $languageService->setLocale($lang);
    
        log_message('debug', 'setLocale() Sonrası Dil: ' . $languageService->getLocale());
    } */
    protected function initialize()
    {
        $session = session();
    
        if (!$session->has('site_lang')) {
            $session->set('site_lang', 'tr'); // Varsayılan dil
            log_message('debug', 'Varsayılan Dil Ayarlandı: tr');
        }
    
        log_message('debug', 'Sayfa Açıldığında Seçili Dil: ' . $session->get('site_lang'));
    
        service('request')->setLocale($session->get('site_lang'));
    }
    
    
    
    
    

    

}
