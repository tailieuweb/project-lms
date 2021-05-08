<?php

class __Mustache_b7a2c33c6b7f7492f9daf53090a07aed extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview" ';
        // 'isdrawer' inverted section
        $value = $context->find('isdrawer');
        if (empty($value)) {
            
            $buffer .= 'data-in-panel="true"';
        }
        $buffer .= ' data-user-id="';
        $value = $this->resolveValue($context->findDot('loggedinuser.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div id="message-drawer-view-overview-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="d-flex flex-column h-100" style="overflow-y: auto">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section_favourites')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section_group_messages')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section_messages')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
