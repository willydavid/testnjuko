<?php
return array(
        'doctrine' => array(
                'connection' => array(
                        'orm_default' => array(
                                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                                'params' => array(
                                        'host' => '127.0.0.1',
                                        'port' => '3306',
                                        'user' => 'root',
                                        'charset' => 'UTF8',
                                        'password' => 'bibi6448',
                                        'dbname' => 'test-technique'
                                )
                        )
                ),
        )
);