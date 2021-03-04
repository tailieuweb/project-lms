<?php

class __Mustache_08811f33ddde1453b7e6197581ce0f40 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<ul class="nav nav-tabs" role="tablist">
';
        $buffer .= $indent . '<!-- First the top most node and immediate children -->
';
        $buffer .= $indent . '    <li class="nav-item">
';
        $buffer .= $indent . '        <a class="nav-link active" href="#link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-toggle="tab" role="tab">';
        $value = $this->resolveValue($context->findDot('node.text'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    </li>
';
        $buffer .= $indent . '<!-- Now the first level children with sub nodes -->
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->section660fbb4d46ba816152cf6059e6951336($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="tab-content mt-3">
';
        $buffer .= $indent . '    <div class="tab-pane active" id="link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="tabpanel">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            <div class="row">
';
        $buffer .= $indent . '                <div class="col-sm-3">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col">
';
        $buffer .= $indent . '                    <ul class="list-unstyled">
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->section108f2967cf9915e0fb4d208c372e244a($context, $indent, $value);
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->sectionDd5b723627b8989c6b3a3477b682e936($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->section00fdd2bcca3066bc081c98994e985500($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionB49391bacd99e2130c3d1ae730ac70e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab">{{text}}</a>
                </li>
            {{/is_short_branch}}
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
                
                // 'is_short_branch' inverted section
                $value = $context->find('is_short_branch');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="nav-item">
';
                    $buffer .= $indent . '                    <a class="nav-link" href="#link';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-toggle="tab" role="tab">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a>
';
                    $buffer .= $indent . '                </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE799124a3f4e2497fff36764d0bc3da8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#display}}
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab">{{text}}</a>
                </li>
            {{/is_short_branch}}
        {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->sectionB49391bacd99e2130c3d1ae730ac70e1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section660fbb4d46ba816152cf6059e6951336(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#children.count}}
        {{#display}}
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab">{{text}}</a>
                </li>
            {{/is_short_branch}}
        {{/display}}
    {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionE799124a3f4e2497fff36764d0bc3da8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90ba6c44e84ae58e6a64815733addd8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <li><a href="{{{action}}}">{{text}}</a></li>
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
                
                $buffer .= $indent . '                                    <li><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section108f2967cf9915e0fb4d208c372e244a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{^children.count}}
                                {{#display}}
                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                {{/display}}
                            {{/children.count}}
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
                
                // 'children.count' inverted section
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    // 'display' section
                    $value = $context->find('display');
                    $buffer .= $this->section90ba6c44e84ae58e6a64815733addd8c($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6e367e371fcb0da95b962d4ad85c9dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4><a href="{{action}}">{{text}}</a><h4>';
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
                
                $buffer .= '<h4><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a><h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ec771be5d3a4dfd86054f31a299f11e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{> core/settings_link_page_single }}
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
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c77a3278d923ad45e9fb81fc3302628(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                    {{^action}}<h4>{{text}}<h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
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
                
                $buffer .= $indent . '                            <hr>
';
                $buffer .= $indent . '                            <div class="row">
';
                $buffer .= $indent . '                                <div class="col-sm-3">
';
                $buffer .= $indent . '                                    ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionB6e367e371fcb0da95b962d4ad85c9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '<h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="col">
';
                $buffer .= $indent . '                                    <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section2ec771be5d3a4dfd86054f31a299f11e($context, $indent, $value);
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbbfcbce9366f0641f411297c0f3f7b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#is_short_branch}}
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                    {{^action}}<h4>{{text}}<h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                        {{/is_short_branch}}
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
                
                // 'is_short_branch' section
                $value = $context->find('is_short_branch');
                $buffer .= $this->section9c77a3278d923ad45e9fb81fc3302628($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD85c0b19f25b7de9f2090f3baeda7832(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#children.count}}
                        {{#is_short_branch}}
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                    {{^action}}<h4>{{text}}<h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                        {{/is_short_branch}}
                    {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionEbbfcbce9366f0641f411297c0f3f7b2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd5b723627b8989c6b3a3477b682e936(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#display}}
                    {{#children.count}}
                        {{#is_short_branch}}
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                    {{^action}}<h4>{{text}}<h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                        {{/is_short_branch}}
                    {{/children.count}}
                {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->sectionD85c0b19f25b7de9f2090f3baeda7832($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4845f37ccefb945467c4c4e7ee2bfee8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
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
                
                // 'children.count' inverted section
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <li><a href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= $value;
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9580eb1ee60b8305a93feffc6b3c38ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#display}}
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
                                    {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->section4845f37ccefb945467c4c4e7ee2bfee8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c56722c3b6d33a1fa1514a30a2f7eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{> core/settings_link_page_single }}
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
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c75a97353275a2ce0507f68cfdc9ea0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                        {{^action}}<h4>{{text}}<h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
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
                
                $buffer .= $indent . '                                <hr>
';
                $buffer .= $indent . '                                <div class="row">
';
                $buffer .= $indent . '                                    <div class="col-sm-3">
';
                $buffer .= $indent . '                                        ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionB6e367e371fcb0da95b962d4ad85c9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '<h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="col-sm-9">
';
                $buffer .= $indent . '                                        <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section7c56722c3b6d33a1fa1514a30a2f7eec($context, $indent, $value);
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b6f76c8b2f1ba16dfc1131653ec2083(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                        {{^action}}<h4>{{text}}<h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->section8c75a97353275a2ce0507f68cfdc9ea0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7106bd4e3e12a107200a1c3c7b04334(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#display}}
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                        {{^action}}<h4>{{text}}<h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
                        {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->section5b6f76c8b2f1ba16dfc1131653ec2083($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd9d8c7da96542856be4c4413e9a2b08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="tab-pane" id="link{{key}}" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                            {{^action}}<h4>{{text}}<h4>{{/action}}
                        </div>
                        <div class="col-sm-9">
                            <ul class="list-unstyled">
                                {{#children}}
                                    {{#display}}
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
                                    {{/display}}
                                {{/children}}
                            </ul>
                        </div>
                    </div>
                    {{#children}}
                        {{#display}}
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                        {{^action}}<h4>{{text}}<h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
                        {{/display}}
                    {{/children}}
                </div>
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
                
                $buffer .= $indent . '            <div class="tab-pane" id="link';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="tabpanel">
';
                $buffer .= $indent . '                <div class="container">
';
                $buffer .= $indent . '                    <div class="row">
';
                $buffer .= $indent . '                        <div class="col-sm-3">
';
                $buffer .= $indent . '                            ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionB6e367e371fcb0da95b962d4ad85c9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '<h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-sm-9">
';
                $buffer .= $indent . '                            <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section9580eb1ee60b8305a93feffc6b3c38ad($context, $indent, $value);
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->sectionF7106bd4e3e12a107200a1c3c7b04334($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00fdd2bcca3066bc081c98994e985500(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#children.count}}
            <div class="tab-pane" id="link{{key}}" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                            {{^action}}<h4>{{text}}<h4>{{/action}}
                        </div>
                        <div class="col-sm-9">
                            <ul class="list-unstyled">
                                {{#children}}
                                    {{#display}}
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
                                    {{/display}}
                                {{/children}}
                            </ul>
                        </div>
                    </div>
                    {{#children}}
                        {{#display}}
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                        {{^action}}<h4>{{text}}<h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
                        {{/display}}
                    {{/children}}
                </div>
            </div>
        {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionDd9d8c7da96542856be4c4413e9a2b08($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
