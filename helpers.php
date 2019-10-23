<?php

/**
 * Simple function for better debugging view
 */
class Dumper
{
    /**
     * Dump a value with elegance.
     *
     * @param  mixed  $value
     * @return void
     */
    public function dump($value)
    {
        $dumper = 'cli' === PHP_SAPI ? new \Symfony\Component\VarDumper\Dumper\CliDumper : new \Symfony\Component\VarDumper\Dumper\HtmlDumper;
        $dumper->dump((new \Symfony\Component\VarDumper\Cloner\VarCloner)->cloneVar($value));
    }
}

if (!function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     * @return void
     */
    function dd()
    {
        array_map(function ($x) {
            (new Dumper)->dump($x);
        }, func_get_args());
        die(1);
    }
}
