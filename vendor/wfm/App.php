<?php


namespace wfm;


class App
{
    public static $app;

    public function __construct()
    {
        $query = trim(urldecode($_SERVER['QUERY_STRING']), '/');
        new ErrorHandler();
        self::$app = Registry::getInstance();
        $this->getParams();
        Router::dispatch($query);
    }

    public function getParams()
    {
        $params = require_once CONFIG . '/params.php';
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                self::$app->setProperties($key, $value);
            }
        }
    }
}