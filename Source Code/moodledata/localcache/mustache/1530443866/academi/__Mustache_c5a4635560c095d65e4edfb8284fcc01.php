<?php

class __Mustache_c5a4635560c095d65e4edfb8284fcc01 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="messaging-area-container" data-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-displaycontacts="';
        $value = $this->resolveValue($context->find('contactsfirst'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="messaging-area ';
        // 'requestedconversation' section
        $value = $context->find('requestedconversation');
        $buffer .= $this->section356d1f12fb330d8906df67f28a9a01a3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        // 'requestedconversation' inverted section
        $value = $context->find('requestedconversation');
        if (empty($value)) {
            
            $buffer .= 'hide-messages';
        }
        $buffer .= '" data-region="messaging-area">
';
        $buffer .= $indent . '        <div class="contacts-area" data-region="contacts-area" role="tablist">
';
        // 'contacts' section
        $value = $context->find('contacts');
        $buffer .= $this->sectionC398f04a3bb78943f37f5af1635e88b5($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="messages-area" data-region="messages-area" role="log">
';
        // 'messages' section
        $value = $context->find('messages');
        $buffer .= $this->sectionBefde7b182bfc2f512213c27420607cb($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section4fa16f181a1870e9496828a08c33b4b9($context, $indent, $value);

        return $buffer;
    }

    private function section356d1f12fb330d8906df67f28a9a01a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-messages';
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
                
                $buffer .= 'show-messages';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC398f04a3bb78943f37f5af1635e88b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core_message/message_area_contacts_area }}
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
                
                if ($partial = $this->mustache->loadPartial('core_message/message_area_contacts_area')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBefde7b182bfc2f512213c27420607cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core_message/message_area_messages_area }}
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
                
                if ($partial = $this->mustache->loadPartial('core_message/message_area_messages_area')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fa16f181a1870e9496828a08c33b4b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core_message/message_area\'],
        function(Messagearea) {
            new Messagearea(\'.messaging-area-container\', {{pollmin}}, {{pollmax}}, {{polltimeout}});
        }
    );
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
                
                $buffer .= $indent . '    require([\'core_message/message_area\'],
';
                $buffer .= $indent . '        function(Messagearea) {
';
                $buffer .= $indent . '            new Messagearea(\'.messaging-area-container\', ';
                $value = $this->resolveValue($context->find('pollmin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('pollmax'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('polltimeout'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    );
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
