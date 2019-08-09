# Unique migrations for Laravel

This package allows to have migrations with unique names.

Why ?
When several developers are working on the same project, they might create migrations that have the same name, when batch migrating several migrations and two have the same name, Laravel throws an exception.

## Install

Register the service provider `Ryssbowh\MigrationServiceProvider`, use `./artisan migrate` and `./artisan make:migration` as before.