<?php

class Config // singleton pattern
{
    private static $instance = null;
    private array $settings;

    private function __construct()
    {
        $this->settings = [
            'custom_price' => 350,
            'size_extras' => [
                'A5' => 0,
                'A4' => 300,
                'A3' => 600
            ],

            'cookie_lifetime' => 3600,
        ];
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get(string $key, $default = null)
    {
        return $this->settings[$key] ?? $default;
    }
}