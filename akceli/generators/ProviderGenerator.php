<?php

namespace Akceli\Generators;

use Akceli\Generators\AkceliGenerator;

use Akceli\Akceli;
use Akceli\Console;

class ProviderGenerator extends AkceliGenerator
{
    public function requiresTable(): bool
    {
        return false;
    }

    public function dataPrompter(): array
    {
        return [];
    }

    public function templates(array $data): array
    {
        return [
            // Akceli::fileTemplate('akceli_generator', 'akceli/generators/ProviderGenerator.php'),
        ];
    }

    public function inlineTemplates(array $data): array
    {
        return [
            // Akceli::inlineTemplate('template_name', 'destination_path', 'identifier string')
        ];
    }

    public function completionMessage(array $data)
    {
        Console::info('Success');
    }
}
