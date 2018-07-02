<?php

class __Mustache_32d01af4ad543b5ac10b2e6fe69568c6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card mb-3 courses-view-course-item">
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="card-img-top myoverviewimg ';
        $value = $this->resolveValue($context->find('classes'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" style=\'background-image: url("';
        $value = $this->resolveValue($context->find('courseimage'), $context);
        $buffer .= $value;
        $buffer .= '");\'>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <div class="card-body course-info-container" id="course-info-container-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="media">
';
        $buffer .= $indent . '            <div class="mr-2">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/progress-chart')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="media-body">
';
        $buffer .= $indent . '                <h4 class="h5"><a href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="';
        // 'visible' inverted section
        $value = $context->find('visible');
        if (empty($value)) {
            
            $buffer .= 'dimmed';
        }
        $buffer .= '">';
        $value = $this->resolveValue($context->find('fullnamedisplay'), $context);
        $buffer .= $value;
        $buffer .= '</a></h4>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <p class="text-muted">
';
        $buffer .= $indent . '            ';
        // 'shortentext' section
        $value = $context->find('shortentext');
        $buffer .= $this->sectionC35644e444201e183d65d977b1e0f0aa($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionC35644e444201e183d65d977b1e0f0aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 140, {{summary}}';
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
                
                $buffer .= ' 140, ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
