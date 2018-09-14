<?php

return [
    'width' => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'options' => [
                'auto'           => 'anomaly.extension.section_block::configuration.width.option.auto',
                'one_half'       => 'anomaly.extension.section_block::configuration.width.option.one_half',
                'one_third'      => 'anomaly.extension.section_block::configuration.width.option.one_third',
                'two_thirds'     => 'anomaly.extension.section_block::configuration.width.option.two_thirds',
                'one_quarter'    => 'anomaly.extension.section_block::configuration.width.option.one_quarter',
                'three_quarters' => 'anomaly.extension.section_block::configuration.width.option.three_quarters',
            ],
        ],
    ],
];
