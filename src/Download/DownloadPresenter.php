<?php namespace Wirelab\DownloadsModule\Download;

use Anomaly\Streams\Platform\Entry\EntryPresenter;
use Illuminate\View\Factory;

class DownloadPresenter extends EntryPresenter
{
    protected $view;
    protected $object;

    public function __construct(Factory $view, $object)
    {
        $this->view = $view;
        parent::__construct($object);
    }

	public function render()
	{
		return $this->view->make('wirelab.module.downloads::download.view', ['download' => $this->object]);
	}
}
