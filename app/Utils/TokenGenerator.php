<?php

namespace App\Utils;

use App\Constants\Resource;

class TokenGenerator
{
    public function createUserToken($user, string $name = 'api-token'): array
    {
        $fullToken = $user->createToken($name, ['*'], now()->addDays(Resource::TOKEN_EXPIRY_SHORT))->plainTextToken;

        [$id, $hash] = explode('|', $fullToken, 2);

        return [
            'full' => $fullToken,
            'hash' => $hash,
            'id'   => $id,
        ];
    }
}
