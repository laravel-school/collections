<?php

class Collection
{
    public array $items;

    public function __construct(mixed $items)
    {
        $this->items = (array) $items;
    }

    public function all()
    {
        return $this->items;
    }

    public function first()
    {
        return isset($this->items[0])
            ? $this->items[0]
            : null;
    }

    public function last()
    {
        $reverse = array_reverse($this->items);

        return isset($reverse[0])
            ? $reverse[0]
            : null;
    }

    public function keys()
    {
        return new static(array_keys($this->items));
    }

    public function count()
    {
        return count($this->items);
    }

    public function average()
    {
        return array_sum($this->items) / count($this->items);
    }
}
