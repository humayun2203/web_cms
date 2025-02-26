<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Session\Handlers\BaseHandler;
use CodeIgniter\Session\Handlers\FileHandler;

class Session extends BaseConfig
{
    public string $driver = FileHandler::class;

    public string $cookieName = 'ci_session';

    // **Oturum süresini uzat (24 saat)**
    public int $expiration = 86400;

    // **Session'ın kaydedileceği dizini belirle**
    public string $savePath = '/var/www/html/writable/session/';

    // **IP adresi ile eşleşmeyi kapat (Bazı sunucular IP değiştirebilir)**
    public bool $matchIP = false;

    // **Session ID yenileme süresini uzat (10 dakika)**
    public int $timeToUpdate = 600;

    // **Session ID değiştirildiğinde eski datayı silme**
    public bool $regenerateDestroy = false;

    public ?string $DBGroup = null;

    // **Güvenlik Ayarları**
    public bool $cookieSecure = false;
    public bool $cookieHTTPOnly = true;

    // **RedisHandler için (Eğer kullanılacaksa)**
    public int $lockRetryInterval = 100_000;
    public int $lockMaxRetries = 300;
}
