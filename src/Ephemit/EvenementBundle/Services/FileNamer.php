<?php

namespace Ephemit\EvenementBundle\Services;

use Oneup\UploaderBundle\Uploader\File\FileInterface;
use Oneup\UploaderBundle\Uploader\Naming\NamerInterface;

class FileNamer implements NamerInterface
{
    public function name(FileInterface $file)
    {
        return $file->getSize().".".$file->getExtension();
    }
}