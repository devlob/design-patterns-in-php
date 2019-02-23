<?php

namespace DesignPatternsInPHP\Creational\Builder;

class MySQLQueryBuilder implements QueryBuilderInterface
{
    protected $table;
    protected $fields;
    protected $wheres = [];

    public function select(...$fields): QueryBuilderInterface
    {
        $this->fields = implode(', ', $fields);

        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->table = $table;

        return $this;
    }

    public function where(string $field, string $operator, string $value): QueryBuilderInterface
    {
        $this->wheres[] = "$field $operator '$value'";

        return $this;
    }

    public function rawSql(): string
    {
    }
}
