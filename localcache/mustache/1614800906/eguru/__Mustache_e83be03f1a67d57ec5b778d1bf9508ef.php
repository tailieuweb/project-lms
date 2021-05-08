<?php

class __Mustache_e83be03f1a67d57ec5b778d1bf9508ef extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    class="hidden"
';
        $buffer .= $indent . '    data-region="view-contact"
';
        $buffer .= $indent . '    aria-hidden="true"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div class="p-2 pt-3" data-region="content-container"></div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
