<?php

namespace App\Controllers;

class TestController extends BaseController
{
    public function testHeadersSent()
    {
        if (headers_sent($file, $line)) {
            echo "Headers already sent in $file on line $line";
        } else {
            header("Set-Cookie: my_test_cookie=12345; Path=/; HttpOnly; SameSite=Lax");
            echo "Headers Sent Successfully!";
        }
    }
}
