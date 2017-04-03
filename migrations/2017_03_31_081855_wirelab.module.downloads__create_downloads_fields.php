<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WirelabModuleDownloadsCreateDownloadsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
    	'name'		   => 'anomaly.field_type.text',
    	'description'  => 'anomaly.field_type.textarea',
        'button_text'  => 'anomaly.field_type.text',
        'target_blank' => 'anomaly.field_type.boolean',
        'file'         => [
            'type'   => 'anomaly.field_type.file',
            'config' => [
                'folders' => [2]
            ]
        ]
    ];

}
