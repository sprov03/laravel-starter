<?php

namespace Akceli\Generators;

use Akceli\Generators\AkceliGenerator;

use Akceli\Akceli;
use Akceli\Console;

class ExceptionGenerator extends AkceliGenerator
{
    public function requiresTable(): bool
    {
        return false;
    }

    public function dataPrompter(): array
    {
        return [
            'Exception' => function() {
                return Console::ask('What is the name of the Exception?');
            }
        ];
    }

    public function templates(array $data): array
    {
        return [
            Akceli::fileTemplate('exception', 'app/Exceptions/[[Exception]]Exception.php')
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
