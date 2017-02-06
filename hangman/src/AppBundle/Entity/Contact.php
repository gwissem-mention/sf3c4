<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class Contact
{
    /**
     * @NotBlank()
     * @Email()
     */
    public $sender;

    /**
     * @NotBlank()
     * @Length(min = 10, max = 50)
     */
    public $subject;

    /**
     * @NotBlank()
     */
    public $message;
}

