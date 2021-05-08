<?php

class __Mustache_baa6c00db6b9067373dfcfaebd7f715d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ul class="nav nav-tabs" role="tablist">
';
        // 'tabs' section
        $value = $context->find('tabs');
        $buffer .= $this->section21021a1f9417001dbb9eaf5b22951ede($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '<div class="tab-content mt-3">
';
        // 'tabs' section
        $value = $context->find('tabs');
        $buffer .= $this->section0683affe7da26522eb7fb416cd1d0c78($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21021a1f9417001dbb9eaf5b22951ede(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="nav-item">
            <a href="#{{name}}" class="nav-link {{#active}}active{{/active}}" data-toggle="tab" role="tab">{{displayname}}</a>
        </li>
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
                
                $buffer .= $indent . '        <li class="nav-item">
';
                $buffer .= $indent . '            <a href="#';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="nav-link ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" data-toggle="tab" role="tab">';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0683affe7da26522eb7fb416cd1d0c78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="tab-pane {{#active}}active{{/active}}" id="{{name}}" role="tabpanel">
            {{{html}}}
        </div>
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
                
                $buffer .= $indent . '        <div class="tab-pane ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="tabpanel">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
