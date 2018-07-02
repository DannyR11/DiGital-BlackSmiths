<?php

class __Mustache_f54183707aab7645fd6b64123ec2443d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'contacts' section
        $value = $context->find('contacts');
        $buffer .= $this->section49ec096a4cd7b81c9685092c9270833c($context, $indent, $value);
        // 'contacts' inverted section
        $value = $context->find('contacts');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="nocontacts" data-region="no-contacts">
';
            // 'isconversation' section
            $value = $context->find('isconversation');
            $buffer .= $this->section175820b9a226cd463f97419025fd9830($context, $indent, $value);
            // 'isconversation' inverted section
            $value = $context->find('isconversation');
            if (empty($value)) {
                
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7740fe3e211fd6e55cda26b2db64237b($context, $indent, $value);
                $buffer .= '
';
            }
            $buffer .= $indent . '    </div>
';
        }

        return $buffer;
    }

    private function section49ec096a4cd7b81c9685092c9270833c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core_message/message_area_contact }}
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
                
                if ($partial = $this->mustache->loadPartial('core_message/message_area_contact')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0023475ab613bfad9c7369892a563af8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nomessages, message';
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
                
                $buffer .= 'nomessages, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section175820b9a226cd463f97419025fd9830(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#str}}nomessages, message{{/str}}
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
                
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0023475ab613bfad9c7369892a563af8($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7740fe3e211fd6e55cda26b2db64237b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocontacts, message';
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
                
                $buffer .= 'nocontacts, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
