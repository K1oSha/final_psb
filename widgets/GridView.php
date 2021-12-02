<?php
namespace app\widgets;


class GridView extends \yii\grid\GridView
{
    public $tableOptions = ['class' => 'table align-middle table-borderless'];

    public $pager = [
        'class' => 'yii\widgets\LinkPager',
        'linkOptions' => [
            'class' => 'page-link',
        ],
        'linkContainerOptions' => [
            'class' => 'page-item',
        ],
        'disabledListItemSubTagOptions' => [
            'tag' => 'a',
            'class' => 'page-link'
        ],
        'options' => [
            'class' => 'pagination pagination-sm mt-4'
        ]
    ];
}