<?php

class __Mustache_0c8cdc4a4a3415d2df48d06d38fc3ff5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'block44f3526faedad195432bfc89cc78fbb6'),
                'element' => array($this, 'blockF8687fe41dfead48f1792fc45e24fbd9'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section7d3cc15665c90a6b99d680c830547233($context, $indent, $value);

        return $buffer;
    }

    private function section86579468c813d19c6be8d55491ef4e7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{separator}}}
                {{{html}}}
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('separator'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d3cc15665c90a6b99d680c830547233(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {
    $(\'#{{element.id}}_label\').css(\'cursor\', \'default\');
    $(\'#{{element.id}}_label\').click(function() {
        $(\'#{{element.id}}\')
            .find(\'button, a, input:not([type="hidden"]), select, textarea, [tabindex]\')
            .filter(\':not([disabled]):not([tabindex="0"]):not([tabindex="-1"])\')
            .first().focus();
    });
});
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    $(\'#';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '_label\').css(\'cursor\', \'default\');
';
                $buffer .= $indent . '    $(\'#';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '_label\').click(function() {
';
                $buffer .= $indent . '        $(\'#';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\')
';
                $buffer .= $indent . '            .find(\'button, a, input:not([type="hidden"]), select, textarea, [tabindex]\')
';
                $buffer .= $indent . '            .filter(\':not([disabled]):not([tabindex="0"]):not([tabindex="-1"])\')
';
                $buffer .= $indent . '            .first().focus();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block44f3526faedad195432bfc89cc78fbb6($context)
    {
        $indent = $buffer = '';
        // 'element.hiddenlabel' inverted section
        $value = $context->findDot('element.hiddenlabel');
        if (empty($value)) {
            
            $buffer .= $indent . '            <p id="';
            $value = $this->resolveValue($context->findDot('element.id'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '_label" class="col-form-label d-inline" aria-hidden="true">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('label'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '            </p>
';
        }
    
        return $buffer;
    }

    public function blockF8687fe41dfead48f1792fc45e24fbd9($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <fieldset class="w-100 m-0 p-0 border-0">
';
        $buffer .= $indent . '            <legend class="sr-only">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</legend>
';
        $buffer .= $indent . '            <div class="d-flex flex-wrap align-items-center">
';
        // 'element.elements' section
        $value = $context->findDot('element.elements');
        $buffer .= $this->section86579468c813d19c6be8d55491ef4e7d($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </fieldset>
';
    
        return $buffer;
    }
}
