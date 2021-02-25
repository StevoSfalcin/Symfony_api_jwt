<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="credit_score")
 * @ORM\Entity()
 */

 class CreditScore
 {
    /**
      * $var int|null
      *
      * @ORM\Column(name="id", type="integer")
      * @ORM\Id()
      * @ORM\GeneratedValue(strategy="AUTO")
      */

     private $id;


     /**
      * $var int|null
      *
      * @ORM\Column(name="cpf", type="integer", length=11)
      */

      private $cpf;


      /**
      * $var int|null
      *
      * @ORM\Column(name="idade", type="integer", length=3)
      */

      private $idade;


      /**
       * @return string|null
       */
      public function getCpf()
      {
          return $this->cpf;
      }

      /**
       * @param string|null $cpf
       */
      public function setCpf(?string $cpf): void
      {
          $this->cpf = $cpf;
      }


      /**
       * @return string|null
       */
      public function getIdade()
      {
          return $this->idade;
      }

      /**
       * @param string|null $idade
       */
      public function setIdade(?string $idade): void
      {
          $this->idade = $idade;
      }
   

 }