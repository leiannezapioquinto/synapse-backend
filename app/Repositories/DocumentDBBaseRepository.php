<?php
namespace App\Repositories;

use App\Services\MongoDBClientManager;
use MongoDB\Collection;

class DocumentDBBaseRepository
{
    protected Collection $collection;

    public function __construct(string $collectionName, string $connectionName = 'documentdb')
    {
        $manager = new MongoDBClientManager();
        $client = $manager->setClientConnection($connectionName);

        $database = config("database.connections.$connectionName.database");
        $this->collection = $client->$database->$collectionName;
    }

    public function all(): array
    {
        return $this->collection->find()->toArray();
    }

    public function find(string $id)
    {
        return $this->collection->findOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);
    }

    public function create(array $data)
    {
        $result = $this->collection->insertOne($data);
        return $result->getInsertedId();
    }

    public function update(string $id, array $data)
    {
        $result = $this->collection->updateOne(
            ['_id' => new \MongoDB\BSON\ObjectId($id)],
            ['$set' => $data]
        );
        return $result->getModifiedCount();
    }

    public function delete(string $id)
    {
        $result = $this->collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);
        return $result->getDeletedCount();
    }
}
