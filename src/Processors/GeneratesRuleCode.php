<?php

namespace Orchestra\Canvas\Processors;

use Orchestra\Canvas\Core\GeneratesCode;

class GeneratesRuleCode extends GeneratesCode
{
    /**
     * Build the class with the given name.
     */
    protected function buildClass(string $name): string
    {
        return str_replace(
            '{{ ruleType }}',
            $this->options['implicit'] ? 'ImplicitRule' : 'Rule',
            parent::buildClass($name)
        );
    }
}
