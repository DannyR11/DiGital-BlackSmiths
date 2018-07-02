<?php

class __Mustache_a2aae7ff624ccc385fa81a4ebe985fd2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="searchtextarea" data-region="search-text-area">
';
        $buffer .= $indent . '    <label class="accesshide" for="searchtext">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBec198647490b4fd7cf2a5fed37757ce($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '    <input data-region="search-box" type="text" id="searchtext" placeholder="';
        // 'contactsfirst' section
        $value = $context->find('contactsfirst');
        $buffer .= $this->section9c79ce95520e0599135df8c88510484a($context, $indent, $value);
        $buffer .= ' ';
        // 'contactsfirst' inverted section
        $value = $context->find('contactsfirst');
        if (empty($value)) {
            
            $buffer .= ' ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionB153396e3d6d732c9d5a7674ce2d2775($context, $indent, $value);
            $buffer .= ' ';
        }
        $buffer .= '">
';
        $buffer .= $indent . '    <div data-region="search-filter-area" class="searchfilterarea" style="display:none" role="button" tabindex="0">
';
        $buffer .= $indent . '        <div data-region="search-filter" class="searchfilter"></div>
';
        $buffer .= $indent . '        <div data-action="search-filter-delete" class="searchfilterdelete">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section164e871b9170fd2140595670ad4f9c08($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'contactsfirst' section
        $value = $context->find('contactsfirst');
        $buffer .= $this->section4d6ebb2fc9c4cb32cdba18ada0636503($context, $indent, $value);
        // 'contactsfirst' inverted section
        $value = $context->find('contactsfirst');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class="contacts" data-region="contacts" data-region-content="conversations" role="tabpanel" id="conversations-tab-panel">
';
            if ($partial = $this->mustache->loadPartial('core_message/message_area_contacts')) {
                $buffer .= $partial->renderInternal($context, $indent . '    ');
            }
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '<div class="contacts" data-region="contacts" data-region-content="contacts" style="display:none;" role="tabpanel" id="contacts-tab-panel"></div>
';
        }
        $buffer .= $indent . '<div class="contacts searcharea" data-region="search-results-area" style="display:none;"></div>
';
        $buffer .= $indent . '<div class="tabs" role="tablist">
';
        $buffer .= $indent . '    <div class="tab tabconversations ';
        // 'contactsfirst' inverted section
        $value = $context->find('contactsfirst');
        if (empty($value)) {
            
            $buffer .= 'selected';
        }
        $buffer .= ' " data-action="conversations-view" role="tab" aria-controls="conversations-tab-panel" aria-selected="';
        // 'contactsfirst' inverted section
        $value = $context->find('contactsfirst');
        if (empty($value)) {
            
            $buffer .= 'true';
        }
        // 'contactsfirst' section
        $value = $context->find('contactsfirst');
        $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
        $buffer .= '" tabindex="0">
';
        $buffer .= $indent . '        <div class="tabimage">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section6dbf0aef9631551ce753343cb523a186($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '        <div>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC715406bd68b40a7ac9a600cdf28e9a5($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="tab tabcontacts ';
        // 'contactsfirst' section
        $value = $context->find('contactsfirst');
        $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
        $buffer .= '" data-action="contacts-view" role="tab" aria-controls="contacts-tab-panel" aria-selected="';
        // 'contactsfirst' section
        $value = $context->find('contactsfirst');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        // 'contactsfirst' inverted section
        $value = $context->find('contactsfirst');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '" tabindex="-1">
';
        $buffer .= $indent . '        <div class="tabimage">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section2bdbb21b45ab7af34f983a18cd90f852($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '        <div>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5ac8d5babc53c224c44966abf4256258($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionBec198647490b4fd7cf2a5fed37757ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search';
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
                
                $buffer .= 'search';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe937926a818688134ba8b5638cab49d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchforuserorcourse, message';
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
                
                $buffer .= 'searchforuserorcourse, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c79ce95520e0599135df8c88510484a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{#str}}searchforuserorcourse, message{{/str}} ';
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
                
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEe937926a818688134ba8b5638cab49d($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB153396e3d6d732c9d5a7674ce2d2775(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchmessages, message';
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
                
                $buffer .= 'searchmessages, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section164e871b9170fd2140595670ad4f9c08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete';
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
                
                $buffer .= 't/delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d6ebb2fc9c4cb32cdba18ada0636503(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="contacts" data-region="contacts" data-region-content="conversations" style="display:none;" role="tabpanel" id="conversations-tab-panel"></div>
<div class="contacts" data-region="contacts" data-region-content="contacts" role="tabpanel" id="contacts-tab-panel">
    {{> core_message/message_area_contacts }}
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
                
                $buffer .= $indent . '<div class="contacts" data-region="contacts" data-region-content="conversations" style="display:none;" role="tabpanel" id="conversations-tab-panel"></div>
';
                $buffer .= $indent . '<div class="contacts" data-region="contacts" data-region-content="contacts" role="tabpanel" id="contacts-tab-panel">
';
                if ($partial = $this->mustache->loadPartial('core_message/message_area_contacts')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
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
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dbf0aef9631551ce753343cb523a186(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/message, moodle';
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
                
                $buffer .= 't/message, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC715406bd68b40a7ac9a600cdf28e9a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'messages, message';
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
                
                $buffer .= 'messages, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
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
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
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
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bdbb21b45ab7af34f983a18cd90f852(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/cohort, moodle';
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
                
                $buffer .= 'i/cohort, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ac8d5babc53c224c44966abf4256258(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'contacts, message';
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
                
                $buffer .= 'contacts, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
