<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carousel Entity
 *
 * @property int $id
 * @property string $nome_carousel
 * @property string $imagem
 * @property string $titulo
 * @property string $descricao
 * @property string $titulo_botao
 * @property string $link
 * @property int $ordem
 * @property int $position_id
 * @property int $color_id
 * @property int $situation_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Position $position
 * @property \App\Model\Entity\Color $color
 * @property \App\Model\Entity\Situation $situation
 */
class Carousel extends Entity
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
        'nome_carousel' => true,
        'imagem' => true,
        'titulo' => true,
        'descricao' => true,
        'titulo_botao' => true,
        'link' => true,
        'ordem' => true,
        'position_id' => true,
        'color_id' => true,
        'situation_id' => true,
        'created' => true,
        'modified' => true,
        'position' => true,
        'color' => true,
        'situation' => true
    ];
}
