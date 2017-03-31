<?php namespace Wirelab\DownloadsModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Wirelab\DownloadsModule\Download\DownloadSeeder;

class DownloadsModuleSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->call(DownloadSeeder::class);
    }
}
