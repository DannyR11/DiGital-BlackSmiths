<?php

class __Mustache_328fae6b03604f39ea44e800073b12f1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('block_myoverview/paging-content')) {
            $context->pushBlockContext(array(
                'paging-content-item' => array($this, 'block2f5d17c61f05ade5148fc9404c54520b'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block2f5d17c61f05ade5148fc9404c54520b($context)
    {
        $indent = $buffer = '';
        if ($partial = $this->mustache->loadPartial('block_myoverview/course-paging-content-item')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
    
        return $buffer;
    }
}
