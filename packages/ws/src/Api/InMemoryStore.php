<?php

namespace Greenter\Api;

use Greenter\Services\Api\BasicToken;
use Greenter\Services\Api\TokenStoreInterface;

class InMemoryStore implements TokenStoreInterface
{
    /**
     * @var BasicToken[]
     */
    private array $tokens = [];

    function get(?string $id): ?BasicToken
    {
        if (array_key_exists($id, $this->tokens)) {
            return $this->tokens[$id];
        }

        return null;
    }

    function set(?string $id, ?BasicToken $token)
    {
       $this->tokens[$id] = $token;
    }
}