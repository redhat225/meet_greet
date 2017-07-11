<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Headings Model
 *
 * @property \App\Model\Table\RootHeadingsTable|\Cake\ORM\Association\BelongsTo $RootHeadings
 * @property \App\Model\Table\ArticlesTable|\Cake\ORM\Association\BelongsToMany $Articles
 *
 * @method \App\Model\Entity\Heading get($primaryKey, $options = [])
 * @method \App\Model\Entity\Heading newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Heading[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Heading|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Heading patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Heading[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Heading findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HeadingsTable extends Table
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

        $this->setTable('headings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('RootHeadings', [
            'foreignKey' => 'root_heading_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Articles', [
            'foreignKey' => 'heading_id',
            'targetForeignKey' => 'article_id',
            'joinTable' => 'articles_headings'
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
            ->requirePresence('heading_name', 'create')
            ->notEmpty('heading_name');

        $validator
            ->requirePresence('heading_slug', 'create')
            ->notEmpty('heading_slug');

        $validator
            ->requirePresence('heading_description', 'create')
            ->notEmpty('heading_description');

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
            ->requirePresence('deleted_by', 'create')
            ->notEmpty('deleted_by');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['root_heading_id'], 'RootHeadings'));

        return $rules;
    }
}
