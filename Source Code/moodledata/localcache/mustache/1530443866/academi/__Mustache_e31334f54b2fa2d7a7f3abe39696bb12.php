<?php

class __Mustache_e31334f54b2fa2d7a7f3abe39696bb12 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="progress-chart-container m-b-1">
';
        // 'hasprogress' section
        $value = $context->find('hasprogress');
        $buffer .= $this->sectionCabe119188069eef9dfc0424984316af($context, $indent, $value);
        // 'hasprogress' inverted section
        $value = $context->find('hasprogress');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="no-progress">
';
            $buffer .= $indent . '        ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section9309ba978ee6380192a2838a92272d20($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE005214116f267a69734e31f9e9e2d15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-percent';
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
                
                $buffer .= 'has-percent';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCabe119188069eef9dfc0424984316af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="progress-doughnut">
        <div class="progress-text {{#progress}}has-percent{{/progress}}">{{progress}}&#37;</div>
        <div class="progress-indicator">
            <svg xmlns="http://www.w3.org/2000/svg">
                <g>
                    <title aria-hidden="true">{{progress}}&#37;</title>
                    <circle class="circle percent-{{progress}}"
                            r="27.5"
                            cx="35"
                            cy="35"/>
                </g>
            </svg>
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
                
                $buffer .= $indent . '    <div class="progress-doughnut">
';
                $buffer .= $indent . '        <div class="progress-text ';
                // 'progress' section
                $value = $context->find('progress');
                $buffer .= $this->sectionE005214116f267a69734e31f9e9e2d15($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&#37;</div>
';
                $buffer .= $indent . '        <div class="progress-indicator">
';
                $buffer .= $indent . '            <svg xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                <g>
';
                $buffer .= $indent . '                    <title aria-hidden="true">';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&#37;</title>
';
                $buffer .= $indent . '                    <circle class="circle percent-';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            r="27.5"
';
                $buffer .= $indent . '                            cx="35"
';
                $buffer .= $indent . '                            cy="35"/>
';
                $buffer .= $indent . '                </g>
';
                $buffer .= $indent . '            </svg>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9309ba978ee6380192a2838a92272d20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/course ';
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
                
                $buffer .= ' i/course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
