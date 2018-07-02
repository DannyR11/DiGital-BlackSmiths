<?php

class __Mustache_a15fd1603ad82d72c1e80fa10ca96287 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'pagingbar' section
        $value = $context->find('pagingbar');
        $buffer .= $this->section29f3a8bdefd131cbe382dd644f8beca7($context, $indent, $value);

        return $buffer;
    }

    private function section6082c1f5941a12f77083512a9a2e6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previous';
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
                
                $buffer .= 'previous';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0677fb8f5893edd6fbc312169be87390(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{< block_myoverview/paging-bar-item }}
                {{$item-content}}
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">{{#str}}previous{{/str}}</span>
                {{/item-content}}
            {{/ block_myoverview/paging-bar-item }}
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
                if ($parent = $this->mustache->loadPartial('block_myoverview/paging-bar-item')) {
                    $context->pushBlockContext(array(
                        'item-content' => array($this, 'block29fa9b53aa0b4bfdabc7de283c67e11f'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB308bc516322b4a60dd175e57b41f1cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{< block_myoverview/paging-bar-item }}
                {{$pagenumber}}first{{/pagenumber}}
            {{/ block_myoverview/paging-bar-item }}
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
                if ($parent = $this->mustache->loadPartial('block_myoverview/paging-bar-item')) {
                    $context->pushBlockContext(array(
                        'pagenumber' => array($this, 'block5df2fc85ff072023003e7828b00dd93b'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55232bdc08cf4199bb3639798460b7ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> block_myoverview/paging-bar-item }}
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
                
                if ($partial = $this->mustache->loadPartial('block_myoverview/paging-bar-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9b2f9e787380662dcbc8dc392768920(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{< block_myoverview/paging-bar-item }}
                {{$pagenumber}}last{{/pagenumber}}
            {{/ block_myoverview/paging-bar-item }}
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
                
                $buffer .= '            ';
                if ($parent = $this->mustache->loadPartial('block_myoverview/paging-bar-item')) {
                    $context->pushBlockContext(array(
                        'pagenumber' => array($this, 'blockC200067c32df72ae0bd9cd69bb24abac'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa8bb7b1bb267b8cc98d38fe4bf9f047(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next';
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
                
                $buffer .= 'next';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d320621b1409fe6c8eaa7c38572a417(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{< block_myoverview/paging-bar-item }}
                {{$item-content}}
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">{{#str}}next{{/str}}</span>
                {{/item-content}}
            {{/ block_myoverview/paging-bar-item }}
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
                
                $buffer .= '            ';
                if ($parent = $this->mustache->loadPartial('block_myoverview/paging-bar-item')) {
                    $context->pushBlockContext(array(
                        'item-content' => array($this, 'blockB02783d04bccc0cf360210a3f8f2adb7'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a2a100a94d25e2ee6d663c68aded117(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'block_myoverview/paging_bar\'], function($, PagingBar) {
    var root = $(\'#{{$pagingbarid}}paging-bar-{{uniqid}}{{/pagingbarid}}\');
    PagingBar.registerEventListeners(root);
});
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
                
                $buffer .= $indent . 'require([\'jquery\', \'block_myoverview/paging_bar\'], function($, PagingBar) {
';
                $buffer .= $indent . '    var root = $(\'#';
                $blockFunction = $context->findInBlock('pagingbarid');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= 'paging-bar-';
                    $value = $this->resolveValue($context->find('uniqid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                }
                $buffer .= '\');
';
                $buffer .= $indent . '    PagingBar.registerEventListeners(root);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29f3a8bdefd131cbe382dd644f8beca7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<nav aria-label="{{label}}"
     id="{{$pagingbarid}}paging-bar-{{uniqid}}{{/pagingbarid}}"
     data-region="paging-bar"
     data-page-count="{{pagecount}}">

    <ul class="pagination">
        {{#previous}}
            {{< block_myoverview/paging-bar-item }}
                {{$item-content}}
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">{{#str}}previous{{/str}}</span>
                {{/item-content}}
            {{/ block_myoverview/paging-bar-item }}
        {{/previous}}
        {{#first}}
            {{< block_myoverview/paging-bar-item }}
                {{$pagenumber}}first{{/pagenumber}}
            {{/ block_myoverview/paging-bar-item }}
        {{/first}}
        {{#pages}}
            {{> block_myoverview/paging-bar-item }}
        {{/pages}}
        {{#last}}
            {{< block_myoverview/paging-bar-item }}
                {{$pagenumber}}last{{/pagenumber}}
            {{/ block_myoverview/paging-bar-item }}
        {{/last}}
        {{#next}}
            {{< block_myoverview/paging-bar-item }}
                {{$item-content}}
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">{{#str}}next{{/str}}</span>
                {{/item-content}}
            {{/ block_myoverview/paging-bar-item }}
        {{/next}}
    </ul>
</nav>
{{#js}}
require([\'jquery\', \'block_myoverview/paging_bar\'], function($, PagingBar) {
    var root = $(\'#{{$pagingbarid}}paging-bar-{{uniqid}}{{/pagingbarid}}\');
    PagingBar.registerEventListeners(root);
});
{{/js}}
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
                
                $buffer .= $indent . '<nav aria-label="';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '     id="';
                $blockFunction = $context->findInBlock('pagingbarid');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= 'paging-bar-';
                    $value = $this->resolveValue($context->find('uniqid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                }
                $buffer .= '"
';
                $buffer .= $indent . '     data-region="paging-bar"
';
                $buffer .= $indent . '     data-page-count="';
                $value = $this->resolveValue($context->find('pagecount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <ul class="pagination">
';
                // 'previous' section
                $value = $context->find('previous');
                $buffer .= $this->section0677fb8f5893edd6fbc312169be87390($context, $indent, $value);
                // 'first' section
                $value = $context->find('first');
                $buffer .= $this->sectionB308bc516322b4a60dd175e57b41f1cd($context, $indent, $value);
                // 'pages' section
                $value = $context->find('pages');
                $buffer .= $this->section55232bdc08cf4199bb3639798460b7ba($context, $indent, $value);
                // 'last' section
                $value = $context->find('last');
                $buffer .= $this->sectionA9b2f9e787380662dcbc8dc392768920($context, $indent, $value);
                // 'next' section
                $value = $context->find('next');
                $buffer .= $this->section1d320621b1409fe6c8eaa7c38572a417($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '</nav>
';
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->section4a2a100a94d25e2ee6d663c68aded117($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block29fa9b53aa0b4bfdabc7de283c67e11f($context)
    {
        $indent = $buffer = '';
        $buffer .= '                    <span aria-hidden="true">&laquo;</span>
';
        $buffer .= $indent . '                    <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6082c1f5941a12f77083512a9a2e6a62($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function block5df2fc85ff072023003e7828b00dd93b($context)
    {
        $indent = $buffer = '';
        $buffer .= 'first';
    
        return $buffer;
    }

    public function blockC200067c32df72ae0bd9cd69bb24abac($context)
    {
        $indent = $buffer = '';
        $buffer .= 'last';
    
        return $buffer;
    }

    public function blockB02783d04bccc0cf360210a3f8f2adb7($context)
    {
        $indent = $buffer = '';
        $buffer .= '                    <span aria-hidden="true">&raquo;</span>
';
        $buffer .= $indent . '                    <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBa8bb7b1bb267b8cc98d38fe4bf9f047($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }
}
