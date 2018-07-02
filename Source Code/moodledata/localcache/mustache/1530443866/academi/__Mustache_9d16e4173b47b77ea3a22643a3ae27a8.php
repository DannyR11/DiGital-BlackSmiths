<?php

class __Mustache_9d16e4173b47b77ea3a22643a3ae27a8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li class="list-group-item m-y-1">
';
        $buffer .= $indent . '<div data-region="course-events-container" id="course-events-container-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-course-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-lg-3">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/course-summary')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-lg-9">
';
        $buffer .= $indent . '            ';
        if ($parent = $this->mustache->loadPartial('block_myoverview/course-event-list')) {
            $context->pushBlockContext(array(
                'limit' => array($this, 'block559f7db53a40c1c3f9936d92e79ff2b8'),
                'offset' => array($this, 'blockE13f09ec51e6aa10c3789885dab1c67f'),
                'courseid' => array($this, 'blockF7bac88deaf761986dad4497b2c710d6'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</li>
';

        return $buffer;
    }


    public function block559f7db53a40c1c3f9936d92e79ff2b8($context)
    {
        $indent = $buffer = '';
        $buffer .= '10';
    
        return $buffer;
    }

    public function blockE13f09ec51e6aa10c3789885dab1c67f($context)
    {
        $indent = $buffer = '';
        $buffer .= '0';
    
        return $buffer;
    }

    public function blockF7bac88deaf761986dad4497b2c710d6($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }
}
