<?php

namespace DamelazMedia\FortifyUIPreset\Commands;

use Illuminate\Console\Command;

class FortifyUIPresetCommand extends Command
{
    public $signature = 'fortify:bootstrap5';

    public $description = 'Install Bootstrap5 with views and resources';

    public function handle()
    {
        $this->publishAssets();

        $this->comment('Bootstrap5 is now installed.');
    }

    protected function publishAssets()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'fortify-ui-preset-resources', '--force' => true]);
    }
}
