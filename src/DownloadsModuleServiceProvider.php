<?php namespace Wirelab\DownloadsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Assignment\AssignmentRouter;
use Anomaly\Streams\Platform\Field\FieldRouter;
use Wirelab\DownloadsModule\Download\Contract\DownloadRepositoryInterface;
use Wirelab\DownloadsModule\Download\DownloadRepository;
use Wirelab\DownloadsModule\Http\Controller\Admin\AssignmentsController;
use Wirelab\DownloadsModule\Http\Controller\Admin\FieldsController;

class DownloadsModuleServiceProvider extends AddonServiceProvider
{

    protected $plugins = [];

    protected $commands = [];

    protected $routes = [
        'admin/downloads'             => 'Wirelab\DownloadsModule\Http\Controller\Admin\DownloadsController@index',
        'admin/downloads/create'      => 'Wirelab\DownloadsModule\Http\Controller\Admin\DownloadsController@create',
        'admin/downloads/edit/{id}'   => 'Wirelab\DownloadsModule\Http\Controller\Admin\DownloadsController@edit',
        'admin/downloads/assignments' => 'Wirelab\DownloadsModule\Http\Controller\Admin\DownloadsController@assignments',
    ];

    protected $bindings = [
        'Anomaly\Streams\Platform\Model\Certificates\CertificatesCertificatesEntryModel' => 'Wirelab\CertificatesModule\Certificate\CertificateModel',
    ];

    protected $singletons = [
        DownloadRepositoryInterface::class => DownloadRepository::class,
    ];

    /**
     * Register the addon.
     *
     * @param FieldRouter $fields
     */
    public function register(FieldRouter $fields, AssignmentRouter $assignments)
    {
        $fields->route($this->addon, FieldsController::class);
        $assignments->route($this->addon, AssignmentsController::class);
    }

}
