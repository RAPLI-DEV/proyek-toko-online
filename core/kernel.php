<?php
namespace core;

class Kernel {
    public function handleURI($param) {
        self::before();
        Router::handleRouter($param);
        self::after();
    }

    protected function before() {
        // Contoh: cek session, CSRF, dll
    }

    protected function after() {
        // Contoh: log response, tutup koneksi DB, dll
        // error_log("Response dikirim pada " . date('Y-m-d H:i:s'));
    }
}