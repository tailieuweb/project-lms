<?php

class __Mustache_692d735e2bbed662ae5d4a859b75cad7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid langimport">
';
        $buffer .= $indent . '    <div class="row row-fluid rtl-compatible">
';
        $buffer .= $indent . '        <div class="col-md-';
        // 'caninstall' section
        $value = $context->find('caninstall');
        $buffer .= $this->section1281316342ba7c72fa44fcbc12b59cb2($context, $indent, $value);
        // 'caninstall' inverted section
        $value = $context->find('caninstall');
        if (empty($value)) {
            
            $buffer .= '12';
        }
        $buffer .= ' span';
        // 'caninstall' section
        $value = $context->find('caninstall');
        $buffer .= $this->section1281316342ba7c72fa44fcbc12b59cb2($context, $indent, $value);
        // 'caninstall' inverted section
        $value = $context->find('caninstall');
        if (empty($value)) {
            
            $buffer .= '12';
        }
        $buffer .= ' mb-1">
';
        $buffer .= $indent . '            <form id="uninstallform" action="';
        $value = $this->resolveValue($context->find('uninstallurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="post">
';
        $buffer .= $indent . '                <fieldset>
';
        $buffer .= $indent . '                    <div class="form-group">
';
        $buffer .= $indent . '                        <label for="menuuninstalllang">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9b50f9e0ecc34ece08d59347100dd12d($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                        <select size="15" multiple="multiple" id="menuuninstalllang" class="form-control input-block-level" name="uninstalllang[]">
';
        // 'installedoptions' section
        $value = $context->find('installedoptions');
        $buffer .= $this->sectionAcdc43664c364295cea167cee4169c79($context, $indent, $value);
        $buffer .= $indent . '                        </select>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="form-group">
';
        $buffer .= $indent . '                        <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <input id="languninstallbutton" type="submit" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9747e6d81332a186bcc6beef8799cab4($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </fieldset>
';
        $buffer .= $indent . '            </form>
';
        // 'updateurl' section
        $value = $context->find('updateurl');
        $buffer .= $this->sectionB98f9d93f8b1f32268e138c9373d281a($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        // 'caninstall' section
        $value = $context->find('caninstall');
        $buffer .= $this->section166e1bbd420092d6e232a6141cc7ff09($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section1281316342ba7c72fa44fcbc12b59cb2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '6';
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
                
                $buffer .= '6';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b50f9e0ecc34ece08d59347100dd12d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'installedlangs, tool_langimport';
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
                
                $buffer .= 'installedlangs, tool_langimport';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
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
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAcdc43664c364295cea167cee4169c79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{{text}}}‎</option>
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
                
                $buffer .= $indent . '                                <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '‎</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9747e6d81332a186bcc6beef8799cab4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'uninstall, tool_langimport';
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
                
                $buffer .= 'uninstall, tool_langimport';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3fdad3b251296edb8d8998a815a63900(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'updatelangs, tool_langimport';
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
                
                $buffer .= 'updatelangs, tool_langimport';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB98f9d93f8b1f32268e138c9373d281a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div>
                    <form id="updateform" action="{{updateurl}}" method="post">
                        <fieldset>
                            <input type="submit" value="{{#str}}updatelangs, tool_langimport{{/str}}" class="btn btn-secondary">
                        </fieldset>
                    </form>
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
                
                $buffer .= $indent . '                <div>
';
                $buffer .= $indent . '                    <form id="updateform" action="';
                $value = $this->resolveValue($context->find('updateurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post">
';
                $buffer .= $indent . '                        <fieldset>
';
                $buffer .= $indent . '                            <input type="submit" value="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3fdad3b251296edb8d8998a815a63900($context, $indent, $value);
                $buffer .= '" class="btn btn-secondary">
';
                $buffer .= $indent . '                        </fieldset>
';
                $buffer .= $indent . '                    </form>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf671d9178cc9b6249e194329a2d4165(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'availablelangs, install';
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
                
                $buffer .= 'availablelangs, install';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b0665ba6dbc395cadf1ab70610fc79a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{{text}}}‎</option>
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
                
                $buffer .= $indent . '                                    <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '‎</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7523292bf79cd2ac3a986294349485f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'install, tool_langimport';
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
                
                $buffer .= 'install, tool_langimport';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section166e1bbd420092d6e232a6141cc7ff09(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-md-6 mb-1">
                <form id="installform" action="{{installurl}}" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="menupack">{{#str}}availablelangs, install{{/str}}</label>
                            <select size="15" multiple="multiple" class="form-control input-block-level" id="menupack" name="pack[]">
                                {{#toinstalloptions}}
                                    <option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{{text}}}‎</option>
                                {{/toinstalloptions}}
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="sesskey" value="{{sesskey}}">
                            <input type="submit" value="{{#str}}install, tool_langimport{{/str}}" class="btn btn-secondary">
                        </div>
                    </fieldset>
                </form>
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
                
                $buffer .= $indent . '            <div class="col-md-6 mb-1">
';
                $buffer .= $indent . '                <form id="installform" action="';
                $value = $this->resolveValue($context->find('installurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post">
';
                $buffer .= $indent . '                    <fieldset>
';
                $buffer .= $indent . '                        <div class="form-group">
';
                $buffer .= $indent . '                            <label for="menupack">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDf671d9178cc9b6249e194329a2d4165($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                            <select size="15" multiple="multiple" class="form-control input-block-level" id="menupack" name="pack[]">
';
                // 'toinstalloptions' section
                $value = $context->find('toinstalloptions');
                $buffer .= $this->section2b0665ba6dbc395cadf1ab70610fc79a($context, $indent, $value);
                $buffer .= $indent . '                            </select>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="form-group">
';
                $buffer .= $indent . '                            <input type="hidden" name="sesskey" value="';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <input type="submit" value="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7523292bf79cd2ac3a986294349485f5($context, $indent, $value);
                $buffer .= '" class="btn btn-secondary">
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </fieldset>
';
                $buffer .= $indent . '                </form>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
