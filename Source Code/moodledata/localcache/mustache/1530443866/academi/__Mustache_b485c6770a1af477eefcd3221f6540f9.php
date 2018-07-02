<?php

class __Mustache_b485c6770a1af477eefcd3221f6540f9 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->find('body'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
