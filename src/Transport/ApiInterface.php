<?php

namespace AlexQWRT\Reqres\Transport;

use AlexQWRT\Reqres\Dto\User;
use AlexQWRT\Reqres\Dto\UserCollection;

interface ApiInterface
{
    public function singleUser(int $userId): User;

    public function listUsers(int $page, int $limit): UserCollection;

    public function create(string $name, string $job): int;
}
