<?php

namespace App\models\entities;

use Doctrine\ORM\Mapping as ORM;//hace referencia como ORM para mapear
use Symphony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table[name="users"]
 */

 class User{
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="IDENTITY")
      */
      protected $id;

      /**
       * @ORM\Column(type="string")
       * @Assert\NotBlank(
       * message="Debes rellenar el nombre")
       * @Assert\Length(
       *    min="2",
       *    minMEssage="Minimo 2 caracteres"
       * )
       */
      protected $name;

      /**
       * @ORM\Column(type="string")
       * @Assert\NotBlank(
       *    message="Debes introducir el email"
       * )
       * @Assert\Email(
       *    message="Debes introducir un email válido"
       * )
       */

       protected $email;

       /**
       * @ORM\Column(type="string")
       * @Assert\NotBlank(
       *    message="Debes introducir el password"
       * )
       * @Assert\Email(
       *    min="6"
       *    message="Debes introducir 6 caracteres minimo"
       * )
       */

      protected $password;

      /**
       * @ORM\Column(type="datetime")
       */
      protected $createdAt;

      /**
       * @ORM\Column(type="datetime")
       */
      protected $updatedAt;

      public function __construct(){
          $this->created_at = new \DateTime('now');
      }
 }

