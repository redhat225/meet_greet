<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 *
 * @property \App\Model\Table\ArticleIllustrationsTable|\Cake\ORM\Association\HasMany $ArticleIllustrations
 * @property \App\Model\Table\HeadingsTable|\Cake\ORM\Association\BelongsToMany $Headings
 *
 * @method \App\Model\Entity\Article get($primaryKey, $options = [])
 * @method \App\Model\Entity\Article newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Article[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Article|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Article patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Article[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Article findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArticlesTable extends Table
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

        $this->setTable('articles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ArticleIllustrations', [
            'foreignKey' => 'article_id'
        ]);
        $this->belongsToMany('Headings', [
            'foreignKey' => 'article_id',
            'targetForeignKey' => 'heading_id',
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
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        $validator
            ->requirePresence('article_title', 'create')
            ->notEmpty('article_title');

        $validator
            ->requirePresence('article_description', 'create')
            ->notEmpty('article_description');

        $validator
            ->requirePresence('article_body', 'create')
            ->notEmpty('article_body');

        $validator
            ->allowEmpty('article_tags');

        $validator
            ->allowEmpty('article_keywords');

        $validator
            ->allowEmpty('article_alias');

        $validator
            ->allowEmpty('article_slug');

        $validator
            ->allowEmpty('article_alt_title');

        $validator
            ->allowEmpty('article_alt_title_concern');

        return $validator;
    }
}
