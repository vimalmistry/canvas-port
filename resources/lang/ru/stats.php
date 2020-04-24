<?php

return [

    'header'  => 'Статистика',
    'subtext' => 'Нажмите на публикацию ниже, чтобы увидеть более подробную информацию.',
    'empty'   => 'Публикации отсутствуют, поэтому нет статистики для просмотра.',
    'views'   => 'Просмотры',
    'chart'   => [
        'view'  => 'посмотреть',
        'views' => 'Просмотры (30 дней)',
    ],
    'cards'   => [
        'views'      => [
            'title' => 'Просмотры (30 дней)',
        ],
        'posts'      => [
            'title' => 'Всего публикаций',
        ],
        'publishing' => [
            'title'   => 'Публикации',
            'details' => [
                'published' => 'Опубликованных',
                'drafts'    => 'Черновиков',
            ],
        ],
    ],
    'details' => [
        'created'   => 'Создано',
        'published' => 'Опубликовано',
        'views'     => 'Просмотры по источникам трафика',
        'reading'   => [
            'header' => 'Популярное время чтения',
            'time'   => 'мин',
            'read'   => 'чтения',
        ],
        'empty'     => 'Подождите, пока у вашей публикации появится больше просмотров, чтобы увидеть статистику.',
        'referer'   => [
            'other'   => 'Другой',
            'unknown' => 'Не возможно определить источник просмотров публикации в этой категории. Например из-за "Режим инкогнито"',
        ],
    ],

];
