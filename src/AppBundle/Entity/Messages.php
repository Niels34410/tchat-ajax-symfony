<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessagesRepository")
 */
class Messages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var array
     *
     * @ORM\Column(name="ListeMessages", type="array")
     */
    private $listeMessages;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set listeMessages
     *
     * @param array $listeMessages
     *
     * @return Messages
     */
    public function setListeMessages($listeMessages)
    {
        $this->listeMessages = $listeMessages;

        return $this;
    }

    /**
     * Get listeMessages
     *
     * @return array
     */
    public function getListeMessages()
    {
        return $this->listeMessages;
    }
}

