<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CourseClasses Model
 *
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\BelongsTo $Teachers
 *
 * @method \App\Model\Entity\CourseClass newEmptyEntity()
 * @method \App\Model\Entity\CourseClass newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CourseClass[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CourseClass get($primaryKey, $options = [])
 * @method \App\Model\Entity\CourseClass findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CourseClass patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CourseClass[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CourseClass|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CourseClass saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CourseClass[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CourseClass[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CourseClass[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CourseClass[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CourseClassesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('course_classes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Teachers', [
            'foreignKey' => 'teacher_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('course_id')
            ->notEmptyString('course_id');

        $validator
            ->integer('teacher_id')
            ->notEmptyString('teacher_id');

        $validator
            ->scalar('schedule')
            ->maxLength('schedule', 50)
            ->allowEmptyString('schedule');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(\Cake\Datasource\RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('course_id', 'Courses'), ['errorField' => 'course_id']);
        $rules->add($rules->existsIn('teacher_id', 'Teachers'), ['errorField' => 'teacher_id']);

        return $rules;
    }
}
