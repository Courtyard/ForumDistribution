<?php

namespace Acme\ForumBundle\Entity;

use Courtyard\Bundle\ForumBundle\Entity\Topic as BaseTopic;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="forum_topic")
 */
class Topic extends BaseTopic
{
    /**
     * @ORM\ManyToOne(targetEntity="Board")
     */
    protected $board;

    /**
     * @ORM\ManyToOne(targetEntity="Acme\UserBundle\Entity\User")
     */
    protected $author;

    /**
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumn(name="postFirst_id")
     */
    protected $postFirst;

    /**
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumn(name="postLast_id")
     */
    protected $postLast;
}