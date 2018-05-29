<?php namespace GeneaLabs\LaravelTwoWayAttributeCasting\Traits;

trait TwoWayAttributeCasting
{
    public function setAttribute($key, $value)
    {
        $phpTypes = [
            "decimal" => "float",
        ];

        $casts = collect($this->getCasts());
        $type = $casts->get($key);

        if ($type) {
            settype($value, ($phpTypes[$type] ?? $type));
        }

        return parent::setAttribute($key, $value);
    }
}
