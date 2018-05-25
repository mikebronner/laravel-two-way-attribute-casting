<?php namespace GeneaLabs\LaravelTwoWayAttributeCasting\Traits;

trait TwoWayAttributeCasting
{
    public function setAttribute($key, $value)
    {
        $casts = collect($this->getCasts());
        $type = $casts->get($key);
        settype($value, $type);

        return parent::setAttribute($key, $value);
    }
}