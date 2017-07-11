<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Heading Entity
 *
 * @property int $id
 * @property string $heading_name
 * @property string $heading_slug
 * @property string $heading_description
 * @property int $root_heading_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 * @property int $created_by
 * @property int $modified_by
 * @property int $deleted_by
 *
 * @property \App\Model\Entity\RootHeading $root_heading
 * @property \App\Model\Entity\Article[] $articles
 */
class Heading extends Entity
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
