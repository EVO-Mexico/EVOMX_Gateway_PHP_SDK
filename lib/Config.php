<?php

namespace Payments;

class Config {

    static $SessionTokenRequestUrl;
    static $PaymentOperationActionUrl;
    static $BaseUrl;
    static $JavaScriptUrl;
    static $TestUrls = array(
        "SessionTokenRequestUrl" => "https://apiuat.test.evomexico.mx/token",
        "PaymentOperationActionUrl" => "https://apiuat.test.evomexico.mx/payments",
        "JavaScriptUrl" => "https://cashierui-apiuat.test.evomexico.mx/js/api.js",
        "BaseUrl" => "https://cashierui-apiuat.test.evomexico.mx/ui/cashier",
    );
    static $ProductionUrls = array(
        "SessionTokenRequestUrl" => "https://api.evomexico.mx/token",
        "PaymentOperationActionUrl" => "https://api.evomexico.mx/payments",
        "JavaScriptUrl" => "https://cashierui-api.evomexico.mx/js/api.js",
        "BaseUrl" => "https://cashierui-api.evomexico.mx/ui/cashier",
    );
    static $Protocol = "https";
    static $Method = "POST";
    static $ContentType = "application/x-www-form-urlencoded";
    static $MerchantId = "";
    static $Password = "";

    public static function factory() {
        foreach (func_get_args()[0] as $var => $value) {
            self::${ucfirst($var)} = $value;
        }
    }

    public static function test() {
        self::$SessionTokenRequestUrl = self::$TestUrls["SessionTokenRequestUrl"];
        self::$PaymentOperationActionUrl = self::$TestUrls["PaymentOperationActionUrl"];
        self::$BaseUrl = self::$TestUrls["BaseUrl"];
        self::$JavaScriptUrl = self::$TestUrls["JavaScriptUrl"];
    }

    public static function production() {
        self::$SessionTokenRequestUrl = self::$ProductionUrls["SessionTokenRequestUrl"];
        self::$PaymentOperationActionUrl = self::$ProductionUrls["PaymentOperationActionUrl"];
        self::$BaseUrl = self::$ProductionUrls["BaseUrl"];
        self::$JavaScriptUrl = self::$ProductionUrls["JavaScriptUrl"];
    }
    
    public static function baseUrl() {
        return self::$BaseUrl;
    }
    
    public static function javaScriptUrl() {
        return self::$JavaScriptUrl;
    }

}
