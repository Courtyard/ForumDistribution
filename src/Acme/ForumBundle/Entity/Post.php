<?php

namespace Acme\ForumBundle\Entity;

use Courtyard\Bundle\ForumBundle\Entity\Post as BasePost;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="forum_post")
 */
class Post extends BasePost
{
    /**
     * @ORM\ManyToOne(targetEntity="Topic")
     */
    protected $topic;
    
    /**
     * @ORM\ManyToOne(targetEntity="Acme\UserBundle\Entity\User")
     */
    protected $author;
}