<?php
namespace App\Services;

use MongoDB\Client;
use Illuminate\Support\Facades\Config;

class MongoDBClientManager
{
    protected Client $client;

    /**
     * Initialize MongoDB client based on connection name
     *
     * @param string $connectionName
     * @return Client
     * @throws \Exception
     */
    public function setClientConnection(string $connectionName = 'documentdb'): Client
    {
        $config = config("database.connections.$connectionName");

        if (!$config) {
            throw new \Exception("MongoDB connection [$connectionName] is not defined in config.");
        }

        $host = $config['host'] ?? 'localhost';
        $port = $config['port'] ?? 27017;
        $username = $config['username'] ?? null;
        $password = $config['password'] ?? null;
        $database = $config['database'] ?? 'test';
        $options = $config['options'] ?? [];

        $uri = $username && $password
            ? "mongodb://{$username}:{$password}@{$host}:{$port}"
            : "mongodb://{$host}:{$port}";

        return new Client($uri, $options);
    }
}
