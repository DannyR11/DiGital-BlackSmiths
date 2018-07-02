<?php

class __Mustache_4ff2b7d58330c9be3935ce37fa72c655 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'modulename' section
        $value = $context->find('modulename');
        $buffer .= $this->section86b3edc7f1c89013bab30d3144d85c8e($context, $indent, $value);
        // 'modulename' inverted section
        $value = $context->find('modulename');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section9c97b4f60a629a62913fd45093511e80($context, $indent, $value);
            $buffer .= '
';
        }

        return $buffer;
    }

    private function section4ac19e0573954dd94c88676d5f3bcb05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' icon, {{modulename}} ';
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
                
                $buffer .= ' icon, ';
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86b3edc7f1c89013bab30d3144d85c8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#pix}} icon, {{modulename}} {{/pix}}
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
                
                $buffer .= $indent . '    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section4ac19e0573954dd94c88676d5f3bcb05($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c97b4f60a629a62913fd45093511e80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/{{eventtype}}event, core ';
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
                
                $buffer .= ' i/';
                $value = $this->resolveValue($context->find('eventtype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'event, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
