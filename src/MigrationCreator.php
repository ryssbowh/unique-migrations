<?php

namespace Ryssbowh\UniqueMigrations;

use Illuminate\Database\Migrations\MigrationCreator as LaravelMigrationCreator;
use Illuminate\Support\Str;

class MigrationCreator extends LaravelMigrationCreator
{
    /**
     * datetime used for the class and file names
     * @var string
     */
    private $datetime;

    /**
     * @inheritDoc
     */
    protected function ensureMigrationDoesntAlreadyExist($name)
    {
        return;
    }

    /**
     * @inheritDoc
     */
    protected function getClassName($name)
    {
        return 'M'.$this->getDatePrefix().'_'.Str::studly($name);
    }

    /**
     * @inheritDoc
     */
    protected function getPath($name, $path)
    {
        return $path.'/'.$this->getClassName($name).'.php';
    }

    /**
     * @inheritDoc
     */
    protected function getDatePrefix()
    {
        if(!$this->datetime){
            $this->datetime = (new \DateTime)->format('Y_m_d_Hisu');
        }
        return $this->datetime;
    }

}
