<?php

class __Mustache_ddee16747e9ce60ae49d9672e0d7c19d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-select')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
