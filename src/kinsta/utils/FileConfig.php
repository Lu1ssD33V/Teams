<?php

namespace kinsta\utils;

class FileConfig {

    public string $file;
    public array $data = [];

    public function __construct(string $file) {
        $this->file = $file;
        if (file_exists($file)) $this->data = json_decode(file_get_contents($file), true);
    }

    public function getAll() {
        return $this->data;
    }

    public function get(string $key, $default = null) {
        return $this->data[$key] ?? $default;
    }

    public function set(string $key, $value) {
        $this->data[$key] = $value;
    }

    public function save() {
        file_put_contents($this->file, json_encode($this->data, JSON_PRETTY_PRINT));
    }

}