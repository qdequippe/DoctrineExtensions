<?php

namespace DoctrineExtensions\Tests\Query\Mssql;

use DoctrineExtensions\Tests\Query\MysqlTestCase;

class YearTest extends MysqlTestCase
{
    public function testYear()
    {
        $this->assertDqlProducesSql(
            "SELECT YEAR(2) from DoctrineExtensions\Tests\Entities\Blank b",
            'SELECT YEAR(2) AS sclr_0 FROM Blank b0_'
        );
    }
}