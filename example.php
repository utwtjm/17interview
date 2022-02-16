<?php

class App {
    public $middlewares = array();

    public function addMiddleware(Middleware $middleware) {
        array_push($this->middlewares, $middleware);
    }

    public function run($action) {
        foreach ($this->middlewares as $middleware) {
            $middleware->before();
        }

        call_user_func($action);

        foreach ($this->middlewares as $middleware) {
            $middleware->after();
        }
    }
}

// middleware
interface Middleware {
    public function before();
    public function after();
}

// 檢查登入狀態
class Logged implements Middleware {
    public function before() {
        echo '檢查是否已登入' . PHP_EOL;
    }

    public function after() {
        echo '登入成功' . PHP_EOL;
    }
}

$app = new App();

// 新增 middleware
$app->addMiddleware(new Logged());

// 登入
$app->run(function() {
    echo '登入' . PHP_EOL;
});




