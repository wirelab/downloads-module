<?php namespace Wirelab\DownloadsModule\Download;

use Anomaly\Streams\Platform\Assignment\Contract\AssignmentRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Stream\StreamModel;
use Wirelab\DownloadsModule\Download\Contract\DownloadRepositoryInterface;

class DownloadSeeder extends Seeder
{
	protected $namespace;
	protected $downloads;
	protected $fields;
	protected $assignments;
	protected $stream;

	public function __construct(
		DownloadRepositoryInterface $downloads,
        AssignmentRepositoryInterface $assignments,
		FieldRepositoryInterface $fields,
		StreamModel $streams
	)
	{
		$this->namespace   = 'downloads';
		$this->downloads   = $downloads;
		$this->fields      = $fields;
		$this->assignments = $assignments;
		$this->stream      = $streams->where('slug','=','downloads')->first();
	}
    /**
     * Run the seeder.
     */
    public function run()
    {
    	$this->createField('image','Image','file',false,false,['folders' => [1]]);
    }

   	public function createField($slug, $name, $type, $translatable = false, $required = false, $config = [])
   	{
		$field = $this->fields->create([
			'namespace' => $this->namespace,
			'slug' => $slug,
			'type' => 'anomaly.field_type.' . $type,
			'locked' => 0,
			'config' => $config,
			'en' => [
				'name' => $name
			]
		]);

        $this->assignments->create(
            [
                'stream'       => $this->stream,
                'field'    	   => $field,
                'translatable' => $translatable,
                'required'     => $required
            ]
        );
   	}
}
