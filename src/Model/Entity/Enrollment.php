<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enrollment Entity
 *
 * @property int $id
 * @property int $student_id
 * @property int $course_id
 * @property \Cake\I18n\FrozenDate|null $enrollment_date
 */
class Enrollment extends Entity
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
        'student_id' => true,
        'course_id' => true,
        'enrollment_date' => true,
    ];
}
