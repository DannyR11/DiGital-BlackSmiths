<?php

class __Mustache_e0f88fd9e1ba04d0a6b00d714d232b56 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template-inline')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block2018e7ea1ba1710345433c227731c403'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section03ae853a492a34ffcd7ac0559504074c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{separator}}}
            {{{html}}}
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
                $value = $this->resolveValue($context->find('separator'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block2018e7ea1ba1710345433c227731c403($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '    <div class="d-flex ml-1">
';
        // 'element.elements' section
        $value = $context->findDot('element.elements');
        $buffer .= $this->section03ae853a492a34ffcd7ac0559504074c($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }
}
