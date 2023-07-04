<?php


interface PersistenceContract
{
    public function save($data);
    public function findById($id);
    public function findBy(string $key);
    public function fetchAll();
}
