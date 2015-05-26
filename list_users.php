<?php

require_once "bootstrap.php";

$usersRepository = $entityManager->getRepository("User");
$users = $usersRepository->findAll();

foreach ($users as $user) {
    echo sprintf("-%s\n", $user->getName());
}
