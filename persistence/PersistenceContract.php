<?php


interface PersistenceContract
{
    public function save($data);
    public function findBy(string $key, $value);
    public function fetchAll();
}
