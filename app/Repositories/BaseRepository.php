<?php

namespace App\Repositories;

class BaseRepository
{
    protected $object;

    protected function __construct(object $object)
    {
        $this->object = $object;
    }

    public function all()
    {
        return $this->object->all();
    }

    public function find(int $id)
    {
        return $this->object->find($id);
    }

    public function store(array $attributes)
    {
        return $this->object->create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return $this->object->find($id)->update($attributes);
    }

    public function destroy(int $id)
    {
        return $this->object->find($id)->delete();
    }
}
