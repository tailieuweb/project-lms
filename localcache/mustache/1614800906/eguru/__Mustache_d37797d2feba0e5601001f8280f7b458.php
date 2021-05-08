<?php

class __Mustache_d37797d2feba0e5601001f8280f7b458 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'divider' inverted section
        $value = $context->find('divider');
        if (empty($value)) {
            
            // 'haschildren' section
            $value = $context->find('haschildren');
            $buffer .= $this->section8cfdb7a12dc0a6b2b8739d71748e8851($context, $indent, $value);
            // 'haschildren' inverted section
            $value = $context->find('haschildren');
            if (empty($value)) {
                
                $buffer .= $indent . '<li class="nav-item">
';
                $buffer .= $indent . '    <a class="nav-item nav-link" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->section4b8b1d056248164fd07f210141302f45($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '</li>
';
            }
        }

        return $buffer;
    }

    private function section4b8b1d056248164fd07f210141302f45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{{title}}}"';
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f8ca674f1b627aa3826c402f08a5e45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="dropdown-divider" role="presentation"></div>
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
                
                $buffer .= $indent . '                <div class="dropdown-divider" role="presentation"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section729fb9e8e5d2ccefc997c8e4260b715b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^divider}}
                <a class="dropdown-item" role="menuitem" href="{{{url}}}" {{#title}}title="{{{title}}}"{{/title}}>{{{text}}}</a>
            {{/divider}}
            {{#divider}}
                <div class="dropdown-divider" role="presentation"></div>
            {{/divider}}
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
                
                // 'divider' inverted section
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <a class="dropdown-item" role="menuitem" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= $value;
                    $buffer .= '" ';
                    // 'title' section
                    $value = $context->find('title');
                    $buffer .= $this->section4b8b1d056248164fd07f210141302f45($context, $indent, $value);
                    $buffer .= '>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</a>
';
                }
                // 'divider' section
                $value = $context->find('divider');
                $buffer .= $this->section5f8ca674f1b627aa3826c402f08a5e45($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8cfdb7a12dc0a6b2b8739d71748e8851(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-{{uniqid}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" {{#title}}title="{{{title}}}"{{/title}} aria-controls="drop-down-menu-{{uniqid}}">
        {{{text}}}
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-{{uniqid}}" aria-labelledby="drop-down-{{uniqid}}">
        {{#children}}
            {{^divider}}
                <a class="dropdown-item" role="menuitem" href="{{{url}}}" {{#title}}title="{{{title}}}"{{/title}}>{{{text}}}</a>
            {{/divider}}
            {{#divider}}
                <div class="dropdown-divider" role="presentation"></div>
            {{/divider}}
        {{/children}}
    </div>
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
                
                $buffer .= $indent . '<li class="dropdown nav-item">
';
                $buffer .= $indent . '    <a class="dropdown-toggle nav-link" id="drop-down-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" ';
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->section4b8b1d056248164fd07f210141302f45($context, $indent, $value);
                $buffer .= ' aria-controls="drop-down-menu-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    <div class="dropdown-menu" role="menu" id="drop-down-menu-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" aria-labelledby="drop-down-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section729fb9e8e5d2ccefc997c8e4260b715b($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
