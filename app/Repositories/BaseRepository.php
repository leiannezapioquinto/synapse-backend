<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class BaseRepository
{
    protected $table;
    protected $primaryKey = 'id';

    protected function buildWhere(array $conditions, &$params)
    {
        $clauses = [];

        foreach ($conditions as $column => $value) {
            $clauses[] = "{$column} = ?";
            $params[] = $value;
        }

        return implode(' AND ', $clauses);
    }

    public function find($id)
    {
        return $this->findWhere([
            $this->primaryKey => $id
        ]);
    }

    public function findWhere(array $conditions)
    {
        $params = [];
        $where = $this->buildWhere($conditions, $params);

        $result = DB::select("
            SELECT * FROM {$this->table}
            WHERE {$where}
            LIMIT 1
        ", $params);

        return $result[0] ?? null;
    }

    public function getWhere(array $conditions = [])
    {
        $params = [];
        $where = '';

        if (!empty($conditions)) {
            $where = 'WHERE ' . $this->buildWhere($conditions, $params);
        }

        return DB::select("
            SELECT * FROM {$this->table}
            {$where}
        ", $params);
    }

    public function insert(array $data)
    {
        $columns = implode(',', array_keys($data));
        $placeholders = implode(',', array_fill(0, count($data), '?'));

        DB::insert("
            INSERT INTO {$this->table}
            ({$columns})
            VALUES ({$placeholders})
        ", array_values($data));

        return true;
    }

    public function updateWhere(array $conditions, array $data)
    {
        $params = [];

        $set = implode(', ', array_map(fn($col) => "{$col} = ?", array_keys($data)));

        $params = array_values($data);

        $where = $this->buildWhere($conditions, $params);

        DB::update("
            UPDATE {$this->table}
            SET {$set}
            WHERE {$where}
        ", $params);

        return true;
    }

    public function deleteWhere(array $conditions)
    {
        $params = [];

        $where = $this->buildWhere($conditions, $params);

        DB::delete("
            DELETE FROM {$this->table}
            WHERE {$where}
        ", $params);

        return true;
    }
}
