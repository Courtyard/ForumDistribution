<?php

namespace Acme\ForumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeForumBundle extends Bundle
{
    public function getParent()
    {
        return 'CourtyardForumBundle';
    }
}