<?php

namespace Ryssbowh\UniqueMigrations;

use Illuminate\Database\Migrations\Migrator as LaravelMigrator;


class Migrator extends LaravelMigrator
{
    /**
     * @inheritDoc
     */
    public function resolve($file)
    {
        $class = str_replace('.php', '', $file);
        return new $class;
    }
}
