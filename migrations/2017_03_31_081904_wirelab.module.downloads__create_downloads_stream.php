<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WirelabModuleDownloadsCreateDownloadsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'downloads',
        'title_column' => 'name',
        'translatable' => true,
        'sortable'     => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'required'     => true,
            'translatable' => true
        ],
        'button_text' => [
            'required'     => true,
            'translatable' => true,
            'config'       => [
                'default_value' => 'Download'
            ]
        ],
        'target_blank' => [
            'config' => [
                'default_value' => true
            ]
        ],
        'file' => [
            'required' => true
        ]
    ];

}
