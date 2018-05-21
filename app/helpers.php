<?php

use Illuminate\Database\Eloquent\Model;

function partition(string $key, array &$data) {
    $item = $data[$key];
    unset($data[$key]);
    return $item;
}

function save($class, Model $model = null, array $data): Model {
    if ($model) {
        $model->update($data);
        return $model;
    } else {
        return $class::create($data);
    }
}
