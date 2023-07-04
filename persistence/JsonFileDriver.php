<?php

require 'persistence/PersistenceContract.php';

class JsonFileDriver implements PersistenceContract
{
    public function save($data)
    {
        $oldData = $this->fetchAll();
        $oldData[] = $data;
        $encodedData = json_encode($oldData);
        file_put_contents('data/json_db.json', $encodedData, LOCK_EX);
    }

    public function findBy(string $key, $value)
    {
        $data = $this->fetchAll();

        $filtered = array_filter($data, function ($item) use ($key, $value) {
            return isset($item[$key]) && $item[$key] === $value;
        });

        return array_shift($filtered);
    }

    public function fetchAll()
    {
        $data = file_get_contents('data/json_db.json');
        return json_decode($data, true) ?: [];
    }
}
