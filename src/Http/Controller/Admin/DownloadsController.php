<?php namespace Wirelab\DownloadsModule\Http\Controller\Admin;

use Wirelab\DownloadsModule\Download\Form\DownloadFormBuilder;
use Wirelab\DownloadsModule\Download\Table\DownloadTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class DownloadsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param DownloadTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(DownloadTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param DownloadFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(DownloadFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param DownloadFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(DownloadFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
