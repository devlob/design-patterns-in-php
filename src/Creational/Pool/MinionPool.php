<?php

namespace DesignPatternsInPHP\Creational\Pool;

class MinionPool
{
    protected $destroyed = [];
    protected $alive = [];

    public function get(): Minion
    {
        if(count($this->destroyed) === 0) {
            $minion = new Minion();

            echo 'Created';
        } else {
            $minion = array_pop($this->destroyed);

            echo 'Reused';
        }

        $this->alive[spl_object_hash($minion)] = $minion;

        return $minion;
    }

    public function piuPiu(Minion $minion)
    {
        $key = spl_object_hash($minion);

        if(isset($this->alive[$key])) {
            unset($this->alive[$key]);

            $this->destroyed[$key] = $minion;
        }
    }

    public function getSituation()
    {
        return count($this->destroyed) . ' destroyed minions and ' .
            count($this->alive) . ' alive minions.';
    }
}