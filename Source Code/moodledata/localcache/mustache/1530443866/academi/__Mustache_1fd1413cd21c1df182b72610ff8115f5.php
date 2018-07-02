<?php

class __Mustache_1fd1413cd21c1df182b72610ff8115f5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'blockE97afdc8aebb2833c1c7d4eba8f1a9db'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionCc48dcea9d2838da4d0362b228628420(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'is-invalid';
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
                
                $buffer .= 'is-invalid';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4016666d4bbffd7770ad7606054c5611(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    autofocus aria-describedby="id_error_{{element.name}}"
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
                
                $buffer .= $indent . '                    autofocus aria-describedby="id_error_';
                $value = $this->resolveValue($context->findDot('element.name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockE97afdc8aebb2833c1c7d4eba8f1a9db($context)
    {
        $indent = $buffer = '';
        // 'element.frozen' inverted section
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '        <input type="password"
';
            $buffer .= $indent . '                class="form-control ';
            // 'error' section
            $value = $context->find('error');
            $buffer .= $this->sectionCc48dcea9d2838da4d0362b228628420($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '                name="';
            $value = $this->resolveValue($context->findDot('element.name'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                id="';
            $value = $this->resolveValue($context->findDot('element.id'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                value="';
            $value = $this->resolveValue($context->findDot('element.value'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                size="';
            $value = $this->resolveValue($context->findDot('element.size'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            // 'error' section
            $value = $context->find('error');
            $buffer .= $this->section4016666d4bbffd7770ad7606054c5611($context, $indent, $value);
            $buffer .= ' ';
            $value = $this->resolveValue($context->find('attributes'), $context);
            $buffer .= $value;
            $buffer .= '>
';
        }
    
        return $buffer;
    }
}
