<?php namespace Wirelab\DownloadsModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Wirelab\DownloadsModule\Download\Form\DownloadFormBuilder;
use Wirelab\DownloadsModule\Download\Table\DownloadTableBuilder;

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

    /**
     * Get all assignments
     *
     * @return RedirectResponse
     */
    public function assignments(StreamRepositoryInterface $streams)
    {
        $stream = $streams->findBySlugAndNamespace('downloads', 'downloads');
        return $this->redirect->to('admin/downloads/assignments/' . $stream->getId());
    }
}
