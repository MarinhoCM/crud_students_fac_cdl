<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $course_name
 * @property string|null $description
 * @property int|null $credits
 *
 * @property \App\Model\Entity\Class[] $classes
 * @property \App\Model\Entity\Enrollment[] $enrollments
 */
class Course extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
        'course_name' => true,
        'description' => true,
        'credits' => true,
        'classes' => true,
        'enrollments' => true,
    ];
}
