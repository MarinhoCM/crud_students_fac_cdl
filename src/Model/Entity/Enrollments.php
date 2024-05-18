<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Enrollments extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}