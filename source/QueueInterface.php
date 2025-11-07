<?php
require_once __DIR__ . '/CollectionInterface.php';

interface QueueInterface extends CollectionInterface
{
    public function offer($element): bool;
    public function poll();
    public function peek();
}
