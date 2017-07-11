<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArticleIllustrations Model
 *
 * @property \App\Model\Table\ArticlesTable|\Cake\ORM\Association\BelongsTo $Articles
 *
 * @method \App\Model\Entity\ArticleIllustration get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArticleIllustration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArticleIllustration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArticleIllustration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArticleIllustration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArticleIllustration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArticleIllustration findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArticleIllustrationsTable extends Table
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

        $this->setTable('article_illustrations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Articles', [
            'foreignKey' => 'article_id',
            'joinType' => 'INNER'
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
            ->requirePresence('illustration_path', 'create')
            ->notEmpty('illustration_path');

        $validator
            ->requirePresence('illustration_title', 'create')
            ->notEmpty('illustration_title');

        $validator
            ->requirePresence('illustration_description', 'create')
            ->notEmpty('illustration_description');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        $validator
            ->requirePresence('illustration_slug', 'create')
            ->notEmpty('illustration_slug');

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
        $rules->add($rules->existsIn(['article_id'], 'Articles'));

        return $rules;
    }
}
