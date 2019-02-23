<?php

namespace DesignPatternsInPHP\Creational\Builder;

class ProductQuery
{
    public static function getProducts(int $quantity)
    {
        return (new MySQLQueryBuilder())
            ->select('price', 'name', 'quantity')
            ->from('products')
            ->where('price', '>', 0)
            ->where('quantity', '>', $quantity)
            ->rawSql();
    }
}