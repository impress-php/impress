<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Impress\Framework\ORM\Doctrine\EntityManagerMysql;

$entityManager = EntityManagerMysql::create();
return ConsoleRunner::createHelperSet($entityManager);
