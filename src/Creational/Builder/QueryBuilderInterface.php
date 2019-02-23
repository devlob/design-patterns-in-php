<?php

namespace DesignPatternsInPHP\Creational\Builder;

interface QueryBuilderInterface
{
    public function select(...$fields): QueryBuilderInterface;

    public function from(string $table): QueryBuilderInterface;

    public function where(string $field, string $operator, string $value): QueryBuilderInterface;

    public function rawSql(): string;
}