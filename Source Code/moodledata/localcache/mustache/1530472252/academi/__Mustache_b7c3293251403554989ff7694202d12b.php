<?php

class __Mustache_b7c3293251403554989ff7694202d12b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_academi/navbar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="header-main">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '	<nav class="navbar navbar-light bg-faded">
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= $value;
        $buffer .= '/?redirect=0" class="navbar-brand ';
        // 'logourl' section
        $value = $context->find('logourl');
        $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
        $buffer .= '
';
        // 'logourl' inverted section
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '            hidden-sm-down
';
        }
        $buffer .= $indent . '            ">
';
        // 'logourl' section
        $value = $context->find('logourl');
        $buffer .= $this->section8e0c04cdc77c315fc03e16b9ea153018($context, $indent, $value);
        // 'logourl' inverted section
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '            <span class="site-name hidden-sm-down">';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= $value;
            $buffer .= '</span>
';
        }
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    	<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    	<div class="collapse navbar-toggleable-md" id="navbarResponsive">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="infoarea ">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <!-- custom_menu -->
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                <!-- page_heading_menu -->
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </nav>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
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
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e0c04cdc77c315fc03e16b9ea153018(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="logo">
                <img src="{{logourl}}" alt="{{sitename}}">
            </span>
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
                
                $buffer .= $indent . '            <span class="logo">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
