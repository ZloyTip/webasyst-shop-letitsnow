<?php

return array(

    'enabled' => array(
        'title' => 'Включён',
        'description' => '',
        'value' => '0',
        'control_type' => waHtmlControl::CHECKBOX,
    ),
    'selector' => array(
        'title' => 'Селектор',
        'description' => 'СSS-селектор элементов, в которых будет идти снег',
        'value' => 'body',
        'control_type' => waHtmlControl::INPUT,
    ),
    'intensive' => array(
        'title' => 'Интенсивность (мс)',
        'description' => 'Как часто создаются новые снежники',
        'value' => '200',
        'control_type' => waHtmlControl::INPUT,
    ),
    'time' => array(
        'title' => 'Время полёта (мс)',
        'description' => 'Время, за которое снежинка "пролетает" блок с выбранным СSS-селектором. <b>Важно!</b> Большое значение времени полёта и маленькое значение интерсивности могут создать большую нагрузку со стороны клиента.',
        'value' => '10000',
        'control_type' => waHtmlControl::INPUT,
    ),
    'snow' => array(
        'title' => 'Снежинки',
        'description' => '',
        'value' => 'snow',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'snow' => 'Белые',
            'snow_blue' => 'Голубые',
            'snow_green' => 'Зелёные',
            'snow_pink' => 'Розовые',
            'snow_yellow' => 'Жёлтые',
        )
    ),
    'demo' => array(
        'title' => 'Демо',
        'description' => '',
        'value' => '',
        'control_type' => waHtmlControl::CUSTOM.' shopLetitsnowPlugin::snowControl',
    ),
);