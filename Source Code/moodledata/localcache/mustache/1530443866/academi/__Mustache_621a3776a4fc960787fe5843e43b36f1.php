<?php

class __Mustache_621a3776a4fc960787fe5843e43b36f1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'otheruserid' section
        $value = $context->find('otheruserid');
        $buffer .= $this->section14468cfdfda078800e936f8f797a93d5($context, $indent, $value);
        // 'contactsfirst' section
        $value = $context->find('contactsfirst');
        $buffer .= $this->section7bb3b706208242e170f0579fdb105e06($context, $indent, $value);
        $buffer .= $indent . '<div class="messages" data-region="messages" data-userid="';
        $value = $this->resolveValue($context->find('otheruserid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_area_messages')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        // 'otheruserid' section
        $value = $context->find('otheruserid');
        $buffer .= $this->sectionD08897d9b4780200e76d136b35a2e5f5($context, $indent, $value);

        return $buffer;
    }

    private function section29c757f7e4b4143731d7f32ce8d916eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' messages, message ';
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
                
                $buffer .= ' messages, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7435b119d153d09b867139a0f31a6d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' deleteallmessages, message ';
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
                
                $buffer .= ' deleteallmessages, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20209abec500260edae72c8ba2037249(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' deleteall ';
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
                
                $buffer .= ' deleteall ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a9d360275281af48c4314c1936fa21b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contactblocked, message ';
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
                
                $buffer .= ' contactblocked, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section738208b6fa17fbbacbeeab10f06c775d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/block, core, {{#str}} contactblocked, message {{/str}} ';
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
                
                $buffer .= ' t/block, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8a9d360275281af48c4314c1936fa21b($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e22684bf166d1ae9f9114a395daf91e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span data-region="contact-icon-blocked">
                    {{#pix}} t/block, core, {{#str}} contactblocked, message {{/str}} {{/pix}}
                </span>
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
                
                $buffer .= $indent . '                <span data-region="contact-icon-blocked">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section738208b6fa17fbbacbeeab10f06c775d($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDcfa99eff132bf7e2c3bb77e759e1365(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'online';
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
                
                $buffer .= 'online';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section593ba051b67b153b1fc4c047ed28c9fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' offline, message ';
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
                
                $buffer .= ' offline, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section802d41026a42950c9bc1e846101fecdc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' online, message ';
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
                
                $buffer .= ' online, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd8222de5b11fd710c546a30b4b9e732(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="status {{#isonline}}online{{/isonline}}">
                <span class="offline-text">{{#str}} offline, message {{/str}}</span>
                <span class="online-text">{{#str}} online, message {{/str}}</span>
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
                
                $buffer .= $indent . '            <div class="status ';
                // 'isonline' section
                $value = $context->find('isonline');
                $buffer .= $this->sectionDcfa99eff132bf7e2c3bb77e759e1365($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="offline-text">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section593ba051b67b153b1fc4c047ed28c9fd($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                <span class="online-text">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section802d41026a42950c9bc1e846101fecdc($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEea424601fcc5722f14366b80b56263c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectmessagestodelete, message ';
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
                
                $buffer .= ' selectmessagestodelete, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c8391ab79a85f8605853ee03e751a55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editmessages, message ';
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
                
                $buffer .= ' editmessages, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
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
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC77fa6ee9c3b9b7cb86f54141b7cc62d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' canceledit, message ';
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
                
                $buffer .= ' canceledit, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96a04e644c61b56b5f76ae597e76c7fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancel';
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
                
                $buffer .= 'cancel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14468cfdfda078800e936f8f797a93d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="messages-header">
    <div class="view-toggle btn-container">
        <button class="btn btn-link" data-action="show-contacts">&lt; {{#str}} messages, message {{/str}}</button>
    </div>
    <div class="delete-all btn-container">
        <button class="btn btn-link" data-action="delete-all-messages" aria-label="{{#str}} deleteallmessages, message {{/str}}">
            {{#str}} deleteall {{/str}}
        </button>
    </div>
    <div class="name-container">
        <div class="name">
            <button class="btn btn-link" data-action="view-contact-profile" data-userid="{{otheruserid}}">{{otheruserfullname}}</button>
            {{#isblocked}}
                <span data-region="contact-icon-blocked">
                    {{#pix}} t/block, core, {{#str}} contactblocked, message {{/str}} {{/pix}}
                </span>
            {{/isblocked}}
        </div>
        {{#showonlinestatus}}
            <div class="status {{#isonline}}online{{/isonline}}">
                <span class="offline-text">{{#str}} offline, message {{/str}}</span>
                <span class="online-text">{{#str}} online, message {{/str}}</span>
            </div>
        {{/showonlinestatus}}
    </div>
    <div class="delete-instructions">
        {{#str}} selectmessagestodelete, message {{/str}}
    </div>
    <div class="actions" data-region="messages-header-actions">
        <button class="btn btn-link messages-delete" data-action="start-delete-messages"
                aria-label="{{#str}} editmessages, message {{/str}}">{{#str}}edit{{/str}}</button>
        <button class="btn btn-link cancel-messages-delete" data-action="cancel-delete-messages"
                aria-label="{{#str}} canceledit, message {{/str}}">{{#str}}cancel{{/str}}</button>
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
                
                $buffer .= $indent . '<div class="messages-header">
';
                $buffer .= $indent . '    <div class="view-toggle btn-container">
';
                $buffer .= $indent . '        <button class="btn btn-link" data-action="show-contacts">&lt; ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section29c757f7e4b4143731d7f32ce8d916eb($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="delete-all btn-container">
';
                $buffer .= $indent . '        <button class="btn btn-link" data-action="delete-all-messages" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA7435b119d153d09b867139a0f31a6d9($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section20209abec500260edae72c8ba2037249($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="name-container">
';
                $buffer .= $indent . '        <div class="name">
';
                $buffer .= $indent . '            <button class="btn btn-link" data-action="view-contact-profile" data-userid="';
                $value = $this->resolveValue($context->find('otheruserid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('otheruserfullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</button>
';
                // 'isblocked' section
                $value = $context->find('isblocked');
                $buffer .= $this->section6e22684bf166d1ae9f9114a395daf91e($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                // 'showonlinestatus' section
                $value = $context->find('showonlinestatus');
                $buffer .= $this->sectionCd8222de5b11fd710c546a30b4b9e732($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="delete-instructions">
';
                $buffer .= $indent . '        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEea424601fcc5722f14366b80b56263c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="actions" data-region="messages-header-actions">
';
                $buffer .= $indent . '        <button class="btn btn-link messages-delete" data-action="start-delete-messages"
';
                $buffer .= $indent . '                aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8c8391ab79a85f8605853ee03e751a55($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '        <button class="btn btn-link cancel-messages-delete" data-action="cancel-delete-messages"
';
                $buffer .= $indent . '                aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC77fa6ee9c3b9b7cb86f54141b7cc62d($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section96a04e644c61b56b5f76ae597e76c7fb($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14bee5eb5b4d36445dad9a602e788cff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newmessagesearch, message';
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
                
                $buffer .= 'newmessagesearch, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7bb3b706208242e170f0579fdb105e06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="messages-header">
    <div class="name-container">
        <div class="name">
            {{#str}}newmessagesearch, message{{/str}}
        </div>
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
                
                $buffer .= $indent . '<div class="messages-header">
';
                $buffer .= $indent . '    <div class="name-container">
';
                $buffer .= $indent . '        <div class="name">
';
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section14bee5eb5b4d36445dad9a602e788cff($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section357d5a69f2f389a217bd3716e337d735(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="message-box">
            {{> core_message/message_area_response }}
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
                
                $buffer .= $indent . '        <div class="message-box">
';
                if ($partial = $this->mustache->loadPartial('core_message/message_area_response')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9af8665fe6eb9ae01a9e90284be8bda(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' deleteselectedmessages, message ';
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
                
                $buffer .= ' deleteselectedmessages, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD08897d9b4780200e76d136b35a2e5f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="response" data-region="response">
    {{#iscurrentuser}}
        <div class="message-box">
            {{> core_message/message_area_response }}
        </div>
    {{/iscurrentuser}}
    <div class="delete-confirmation">
        <button class="btn btn-link confirm" data-action="delete-messages">{{#str}} deleteselectedmessages, message {{/str}}</button>
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
                
                $buffer .= $indent . '<div class="response" data-region="response">
';
                // 'iscurrentuser' section
                $value = $context->find('iscurrentuser');
                $buffer .= $this->section357d5a69f2f389a217bd3716e337d735($context, $indent, $value);
                $buffer .= $indent . '    <div class="delete-confirmation">
';
                $buffer .= $indent . '        <button class="btn btn-link confirm" data-action="delete-messages">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD9af8665fe6eb9ae01a9e90284be8bda($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
