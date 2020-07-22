<?php

namespace Design\Creational\Builder;

class PostgresQueryBuilder extends MysqlQueryBuilder
{
    /**
     * Override because PostgresQL has another syntax for limit condition
     *
     * @param int $start
     * @param int $offset
     * @return $this|SQLQueryBuilder
     * @throws \Exception
     */
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}
