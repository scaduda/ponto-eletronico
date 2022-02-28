<?php

class Model {
    protected static string $tableName = '';
    protected static array $columns = [];

    function __construct(array $attributes)
    {
        $this->loadFromArray($attributes);
    }

    public function loadFromArray(array $attributes)
    {
        if ($attributes) {
            foreach ($attributes as $key => $value){
                $this->set($key, $value);
            }
        }
    }

    public function get($key)
    {
        return $this->values[$key];
    }

    public function set($key, $value)
    {
        $this->values[$key] = $value;
    }
}