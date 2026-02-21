<?php

// Interface for request handling
interface RequestInterface
{
    public function get(string $key);
    public function post(string $key);
}

// Wrapper class for $_GET, $_POST with sanitization
class Request implements RequestInterface
{
    private array $data; // method (POST, GET, etc.)

    public function __construct(array $source)
    {
        $this->data = $source;
    }

    public function get(string $key)
    {
        return htmlspecialchars($this->data[$key] ?? null);
    }

    public function post(string $key)
    {
        return htmlspecialchars($this->data[$key] ?? null);
    }
}