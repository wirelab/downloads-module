<?php namespace Wirelab\DownloadsModule\Download;

use Anomaly\Streams\Platform\Entry\EntryCollection;

class DownloadCollection extends EntryCollection
{
	public function render()
	{
		$downloads = '';

		foreach ($this as $download) {
			// Render each download individually
			$downloads .= $download->render();
		}

		return $downloads;
	}
}
