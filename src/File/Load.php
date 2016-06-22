<?php

namespace Lab\File;

use Gnugat\NomoSpaco\FqcnRepository;
use Gnugat\NomoSpaco\File\FileRepository;

class Load
{
    protected $fqcnRepository;
    protected $fileRepository;
    protected $classes;

    public function __construct()
    {
        $this->fileRepository = new FileRepository();
        $this->fqcnRepository = new FqcnRepository($this->fileRepository);
    }

    public function from($path)
    {
        $this->classes = $this->fqcnRepository->findIn($path);
        return $this;
    }

    public function all()
    {
        return array_map(
            function ($class) {
                return new $class;
            },
            $this->getClasses()
        );
    }

    public function getClasses()
    {
        return $this->classes;
    }
}

