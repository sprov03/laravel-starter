<?php

namespace Akceli\Generators;

use Akceli\Generators\AkceliGenerator;

use Akceli\Akceli;
use Akceli\Console;

class ObserverGenerator extends AkceliGenerator
{
    public function requiresTable(): bool
    {
        return false;
    }

    public function dataPrompter(): array
    {
        return [
            "Observer" => function(array $data) {
                return Console::ask('What is the name of the Observer?');
            }
        ];
    }

    public function templates(array $data): array
    {
        return [
            Akceli::fileTemplate('observer', 'app/Observers/[[Observer]]Observer.php'),
        ];
    }

    public function inlineTemplates(array $data): array
    {
        return [
        ];
    }

    public function completionMessage(array $data)
    {
        Console::info('Success');
    }
}
