<?php

namespace App\Services;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpaceToDashRepository")
 */
class SpaceToDash implements Transform
{
    public function Transform(string $string) : string
    {
        $string = str_replace(" ", "-", $string);
    }
}
