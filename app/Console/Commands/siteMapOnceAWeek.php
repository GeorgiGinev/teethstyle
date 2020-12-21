<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
// modify this to your own needs
//$sitemap = SitemapGenerator::create('http://teethstyle.loc')->getSitemap()->getTags();
        $sitemapObject = array(SitemapGenerator::create('http://teethstyle.com')->writeToFile('sitemap.xml'));
    }
}
