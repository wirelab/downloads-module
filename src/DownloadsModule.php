<?php namespace Wirelab\DownloadsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class DownloadsModule extends Module
{

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-download';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'downloads' => [
            'buttons' => [
                'new_certificate' => [
                    'text' => 'wirelab.module.downloads::button.download.new',
                    'enabled' => 'admin/downloads'
                ],
                'assignments' =>[
                    'enabled' => 'admin/downloads'
                ]
            ],
            'sections' => [
                'assignments' => [
                    'hidden' => true,
                    'href'    => 'admin/downloads/assignments/{request.route.parameters.stream}',
                    'buttons' => [
                        'assign_fields' => [
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'href'        => 'admin/downloads/assignments/{request.route.parameters.stream}/choose',
                        ],
                    ]
                ]
            ],
        ],
        'fields' => [
            'buttons' => [
                'new_field' => [
                    'text'        => 'module::button.field.new',
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href'        => 'admin/downloads/fields/choose',
                ],
            ],
        ],
    ];
}
