<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 * @property string $article_title
 * @property string $article_description
 * @property string $article_body
 * @property string $article_tags
 * @property string $article_keywords
 * @property string $article_alias
 * @property string $article_slug
 * @property string $article_alt_title
 * @property string $article_alt_title_concern
 *
 * @property \App\Model\Entity\ArticleIllustration[] $article_illustrations
 * @property \App\Model\Entity\Heading[] $headings
 */
class Article extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
