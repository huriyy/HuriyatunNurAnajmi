<?php
require_once __DIR__ . '/MapInterface.php';

class HashMap implements MapInterface
{
    private $map = [];

    public function __construct(array $init = [])
    {
        foreach ($init as $k => $v) $this->put($k, $v);
    }

    public function put($key, $value)
    {
        // use stringable key when possible
        if (is_object($key)) {
            $key = spl_object_hash($key);
        } elseif (is_bool($key)) {
            $key = $key ? '1' : '0';
        }
        $this->map[(string)$key] = $value;
        return $value;
    }

    public function get($key)
    {
        if (is_object($key)) $key = spl_object_hash($key);
        $k = (string)$key;
        return array_key_exists($k, $this->map) ? $this->map[$k] : null;
    }

    public function remove($key)
    {
        if (is_object($key)) $key = spl_object_hash($key);
        $k = (string)$key;
        if (array_key_exists($k, $this->map)) {
            $val = $this->map[$k];
            unset($this->map[$k]);
            return $val;
        }
        return null;
    }

    public function containsKey($key): bool
    {
        if (is_object($key)) $key = spl_object_hash($key);
        return array_key_exists((string)$key, $this->map);
    }

    public function keys(): array
    {
        return array_keys($this->map);
    }

    public function values(): array
    {
        return array_values($this->map);
    }

    public function size(): int
    {
        return count($this->map);
    }
    public function isEmpty(): bool
    {
        return $this->size() === 0;
    }
    public function clear(): void
    {
        $this->map = [];
    }
}
