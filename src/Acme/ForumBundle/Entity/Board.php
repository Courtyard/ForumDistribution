<?php

namespace Acme\ForumBundle\Entity;

use Courtyard\Bundle\ForumBundle\Entity\Board as BaseBoard;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="forum_board")
 */
class Board extends BaseBoard
{

}