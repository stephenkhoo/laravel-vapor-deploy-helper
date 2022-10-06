<?php

namespace Stephenkhoo\LaravelVaporDeployHelper\Commands;

use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;

class ComposerMirrorPathRepoSetToTrue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'build:composer-mirror';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Composer mirror fix';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $composer = json_decode(File::get(base_path('composer.json')));
        $composer->config->COMPOSER_MIRROR_PATH_REPOS = true;
        File::put(base_path('composer.json'), str_replace('\/', '/', json_encode($composer, JSON_PRETTY_PRINT)) . PHP_EOL);
        return 0;
    }
}
