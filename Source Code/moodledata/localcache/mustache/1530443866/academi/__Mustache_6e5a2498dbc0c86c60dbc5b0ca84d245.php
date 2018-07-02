<?php

class __Mustache_6e5a2498dbc0c86c60dbc5b0ca84d245 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="eventlist m-y-1">
';
        // 'events' section
        $value = $context->find('events');
        $buffer .= $this->section4e1cea715cbece1697b5ba197fc28910($context, $indent, $value);
        // 'events' inverted section
        $value = $context->find('events');
        if (empty($value)) {
            
            $buffer .= $indent . '        <span class="calendar-information calendar-no-results">
';
            $buffer .= $indent . '            ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionDadaa5b1aa865a4d3d8a166008b9cd3d($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </span>
';
        }
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section4e1cea715cbece1697b5ba197fc28910(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core_calendar/event_item }}
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
                
                if ($partial = $this->mustache->loadPartial('core_calendar/event_item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDadaa5b1aa865a4d3d8a166008b9cd3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'daywithnoevents, calendar';
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
                
                $buffer .= 'daywithnoevents, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
