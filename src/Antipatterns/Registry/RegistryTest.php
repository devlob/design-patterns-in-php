<?php

namespace DesignPatternsInPHP\Antipatterns\Registry;

use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    /**
     * @test
     */
    public function registry_should_not_contain_an_entry()
    {
        $registry = Registry::getInstance();
        $this->assertFalse($registry::contains('settings'));
    }

    /**
     * @test
     */
    public function can_set_an_entry_to_the_registry()
    {
        $registry = Registry::getInstance();

        $registry::set('settings', [
            'environment' => 'production',
            'url' => 'https://devlob.com'
        ]);

        $this->assertEquals(
            $registry::get('settings'),
            [
                'environment' => 'production',
                'url' => 'https://devlob.com'
            ]
        );
    }
}