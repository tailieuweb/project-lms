<?php

class __Mustache_5719a9300c55aa2bf48344947b2ff052 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'haspages' section
        $value = $context->find('haspages');
        $buffer .= $this->section2b86d92e0417d7181fa68a6ca847c6c6($context, $indent, $value);

        return $buffer;
    }

    private function section6082c1f5941a12f77083512a9a2e6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previous';
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
                
                $buffer .= 'previous';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c6756198830abbbdcbac9c0531cc5a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item">
                    <a href="{{url}}" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">{{#str}}previous{{/str}}</span>
                    </a>
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
                
                $buffer .= $indent . '                <li class="page-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-link" aria-label="Previous">
';
                $buffer .= $indent . '                        <span aria-hidden="true">&laquo;</span>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6082c1f5941a12f77083512a9a2e6a62($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0159badb2c5b8f6a0c8ecf5c1d9f0f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item">
                    <a href="{{url}}" class="page-link">{{page}}</a>
                </li>
                <li class="page-item disabled">
                    <span class="page-link">&hellip;</a>
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
                
                $buffer .= $indent . '                <li class="page-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-link">';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '                <li class="page-item disabled">
';
                $buffer .= $indent . '                    <span class="page-link">&hellip;</a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
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

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d08f03ddf472d777bddede343f67f67(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'currentinparentheses, theme_boost';
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
                
                $buffer .= 'currentinparentheses, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7e015e1b51ae1f426f6df3b5cc2f878(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="sr-only">{{#str}}currentinparentheses, theme_boost{{/str}}</span>
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
                
                $buffer .= $indent . '                            <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5d08f03ddf472d777bddede343f67f67($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFadbb65ce2b8383ab34505b76cb0aad7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item {{#active}}active{{/active}}">
                    <a href="{{#url}}{{.}}{{/url}}{{^url}}#{{/url}}" class="page-link">
                        {{page}}
                        {{#active}}
                            <span class="sr-only">{{#str}}currentinparentheses, theme_boost{{/str}}</span>
                        {{/active}}
                    </a>
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
                
                $buffer .= $indent . '                <li class="page-item ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                // 'url' inverted section
                $value = $context->find('url');
                if (empty($value)) {
                    
                    $buffer .= '#';
                }
                $buffer .= '" class="page-link">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->sectionD7e015e1b51ae1f426f6df3b5cc2f878($context, $indent, $value);
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC29904ca613daaba9c9bda0bcadc1d2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item disabled">
                    <span class="page-link">&hellip;</a>
                </li>
                <li class="page-item">
                    <a href="{{url}}" class="page-link">{{page}}</a>
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
                
                $buffer .= $indent . '                <li class="page-item disabled">
';
                $buffer .= $indent . '                    <span class="page-link">&hellip;</a>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '                <li class="page-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-link">';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa8bb7b1bb267b8cc98d38fe4bf9f047(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next';
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
                
                $buffer .= 'next';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB228579e87d3803bbbf41afe683420ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item">
                    <a href="{{url}}" class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">{{#str}}next{{/str}}</span>
                    </a>
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
                
                $buffer .= $indent . '                <li class="page-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-link" aria-label="Next">
';
                $buffer .= $indent . '                        <span aria-hidden="true">&raquo;</span>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBa8bb7b1bb267b8cc98d38fe4bf9f047($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b86d92e0417d7181fa68a6ca847c6c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav aria-label="{{label}}" class="pagination pagination-centered justify-content-center">
        <ul class="mt-1 pagination ">
            {{#previous}}
                <li class="page-item">
                    <a href="{{url}}" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">{{#str}}previous{{/str}}</span>
                    </a>
                </li>
            {{/previous}}
            {{#first}}
                <li class="page-item">
                    <a href="{{url}}" class="page-link">{{page}}</a>
                </li>
                <li class="page-item disabled">
                    <span class="page-link">&hellip;</a>
                </li>
            {{/first}}
            {{#pages}}
                <li class="page-item {{#active}}active{{/active}}">
                    <a href="{{#url}}{{.}}{{/url}}{{^url}}#{{/url}}" class="page-link">
                        {{page}}
                        {{#active}}
                            <span class="sr-only">{{#str}}currentinparentheses, theme_boost{{/str}}</span>
                        {{/active}}
                    </a>
                </li>
            {{/pages}}
            {{#last}}
                <li class="page-item disabled">
                    <span class="page-link">&hellip;</a>
                </li>
                <li class="page-item">
                    <a href="{{url}}" class="page-link">{{page}}</a>
                </li>
            {{/last}}
            {{#next}}
                <li class="page-item">
                    <a href="{{url}}" class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">{{#str}}next{{/str}}</span>
                    </a>
                </li>
            {{/next}}
        </ul>
    </nav>
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
                
                $buffer .= $indent . '    <nav aria-label="';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="pagination pagination-centered justify-content-center">
';
                $buffer .= $indent . '        <ul class="mt-1 pagination ">
';
                // 'previous' section
                $value = $context->find('previous');
                $buffer .= $this->section0c6756198830abbbdcbac9c0531cc5a3($context, $indent, $value);
                // 'first' section
                $value = $context->find('first');
                $buffer .= $this->sectionD0159badb2c5b8f6a0c8ecf5c1d9f0f4($context, $indent, $value);
                // 'pages' section
                $value = $context->find('pages');
                $buffer .= $this->sectionFadbb65ce2b8383ab34505b76cb0aad7($context, $indent, $value);
                // 'last' section
                $value = $context->find('last');
                $buffer .= $this->sectionC29904ca613daaba9c9bda0bcadc1d2d($context, $indent, $value);
                // 'next' section
                $value = $context->find('next');
                $buffer .= $this->sectionB228579e87d3803bbbf41afe683420ee($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '    </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
