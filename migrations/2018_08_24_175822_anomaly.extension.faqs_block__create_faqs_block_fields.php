<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionFaqsBlockCreateFaqsBlockFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionFaqsBlockCreateFaqsBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'question' => 'anomaly.field_type.text',
        'answer'   => [
            'type'   => 'anomaly.field_type.wysiwyg',
            'config' => [
                'configuration' => 'simple',
            ],
        ],
        'faqs'     => [
            'type'   => 'anomaly.field_type.repeater',
            'config' => [
                'related' => 'faqs_block.faqs',
            ],
        ],
    ];

}
