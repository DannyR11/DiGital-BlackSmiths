<?php

class __Mustache_c3d7abd1ecdcfd9eafcfd081c31d8401 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav  id="header" class="fixed-top navbar navbar-light bg-faded navbar-static-top navbar-expand moodle-has-zindex">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '     <div class="container navbar-nav">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div data-region="drawer-toggle" class="d-inline-block mr-3">
';
        $buffer .= $indent . '            <button aria-expanded="';
        // 'navdraweropen' section
        $value = $context->find('navdraweropen');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-secondary" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section66b0946d0e0a1df850d6bb3bea0fce2f($context, $indent, $value);
        $buffer .= '<span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            <span aria-hidden="true"> </span>
';
        $buffer .= $indent . '            <span aria-hidden="true"> </span>
';
        $buffer .= $indent . '            <span aria-hidden="true"> </span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <nav class="nav navbar-nav hidden-md-down address-head">
';
        // 'phoneno' section
        $value = $context->find('phoneno');
        $buffer .= $this->sectionB689ae298a8310e94bbf24f05615b158($context, $indent, $value);
        // 'emailid' section
        $value = $context->find('emailid');
        $buffer .= $this->section15132e2668eee8cea3fbb716f83cac67($context, $indent, $value);
        $buffer .= $indent . '            </nav>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <ul class="nav navbar-nav ml-auto">
';
        $buffer .= $indent . '            <div class="d-none d-lg-block">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.search_box'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <!-- navbar_plugin_output -->
';
        $buffer .= $indent . '            <li class="nav-item">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <!-- user_menu -->
';
        $buffer .= $indent . '            <li class="nav-item d-flex align-items-center">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <!-- search_box -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
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
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66b0946d0e0a1df850d6bb3bea0fce2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/menubars';
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
                
                $buffer .= 'i/menubars';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
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
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB689ae298a8310e94bbf24f05615b158(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span><i class="fa fa-phone"></i>{{s_callus}} : {{ phoneno }}</span>
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
                
                $buffer .= $indent . '                    <span><i class="fa fa-phone"></i>';
                $value = $this->resolveValue($context->find('s_callus'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15132e2668eee8cea3fbb716f83cac67(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span><i class="fa fa-envelope-o"></i>{{s_email}} : <a href="mailto:{{emailid}}">{{ emailid }}</a></span>
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
                
                $buffer .= $indent . '                    <span><i class="fa fa-envelope-o"></i>';
                $value = $this->resolveValue($context->find('s_email'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' : <a href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
