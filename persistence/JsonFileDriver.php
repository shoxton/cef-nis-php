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

    public function findById($id)
    {

    }

    public function findBy(string $key)
    {

    }

    public function fetchAll()
    {
        $data = file_get_contents('data/json_db.json');
        return json_decode($data, true) ?: [];
    }
}
