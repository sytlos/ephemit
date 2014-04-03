<?php

namespace Ephemit\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EphemitUtilisateurBundle extends Bundle
{
     public function getParent()
  {
    return 'SonataUserBundle';
  }
}
