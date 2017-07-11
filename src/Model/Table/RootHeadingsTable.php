<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RootHeadings Model
 *
 * @property \App\Model\Table\HeadingsTable|\Cake\ORM\Association\HasMany $Headings
 *
 * @method \App\Model\Entity\RootHeading get($primaryKey, $options = [])
 * @method \App\Model\Entity\RootHeading newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RootHeading[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RootHeading|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RootHeading patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RootHeading[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RootHeading findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RootHeadingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('root_headings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Headings', [
            'foreignKey' => 'root_heading_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('root_heading_name', 'create')
            ->notEmpty('root_heading_name');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->integer('modified_by')
            ->requirePresence('modified_by', 'create')
            ->notEmpty('modified_by');

        $validator
            ->integer('deleted_by')
            ->allowEmpty('deleted_by');

        return $validator;
    }
}
