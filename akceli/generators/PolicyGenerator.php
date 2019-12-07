<?php

namespace Akceli\Generators;

use Akceli\Generators\AkceliGenerator;

use Akceli\Akceli;
use Akceli\Console;

class PolicyGenerator extends AkceliGenerator
{
    public function requiresTable(): bool
    {
        return false;
    }

    public function dataPrompter(): array
    {
        return [
            "Policy" => function(array $data) {
                return Console::ask('What is the name of the Policy?');
            }
        ];
    }

    public function templates(array $data): array
    {
        return [
            Akceli::fileTemplate('policy', 'app/Policies/[[Policy]]Policy.php'),
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
