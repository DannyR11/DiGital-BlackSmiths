<?php

class __Mustache_6958ca94c1646d866cd6e67e1b13e7f2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="message-text-container">
';
        $buffer .= $indent . '    <textarea data-region="send-message-txt"
';
        $buffer .= $indent . '        rows="1"
';
        $buffer .= $indent . '        data-auto-rows
';
        $buffer .= $indent . '        data-max-rows="5"
';
        $buffer .= $indent . '        role="textbox"
';
        $buffer .= $indent . '        aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section61f5b922cd661f796140ba8b73ac9804($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section61f5b922cd661f796140ba8b73ac9804($context, $indent, $value);
        $buffer .= '"></textarea>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="send-button-container">
';
        $buffer .= $indent . '    <button class="btn btn-link" data-action="send-message">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section537d53f1bc809993f1fdc3ec5b7424d6($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section61f5b922cd661f796140ba8b73ac9804(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' writeamessage, message ';
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
                
                $buffer .= ' writeamessage, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section537d53f1bc809993f1fdc3ec5b7424d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'send, message';
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
                
                $buffer .= 'send, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
