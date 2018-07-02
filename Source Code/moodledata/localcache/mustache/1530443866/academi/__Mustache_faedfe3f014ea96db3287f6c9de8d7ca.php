<?php

class __Mustache_faedfe3f014ea96db3287f6c9de8d7ca extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_academi/header')) {
            $buffer .= $partial->renderInternal($context, $indent . '     ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" class="container-fluid">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="page-content" class="row">
';
        $buffer .= $indent . '            <div id="region-main-box" class="col-12">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section06185a8fbd36fbf8b70e542995872ba7($context, $indent, $value);
        $buffer .= $indent . '                <section id="region-main" ';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionA8b30bc710534302fe5cc09141cbd5c7($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                    <div class="card">
';
        $buffer .= $indent . '                        <div class="card-body">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section85b38e2ef114feb4bcec35483a18248f($context, $indent, $value);
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </section>
';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->section1c0f68aa999de2ecf1fc4d91fb28f123($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('theme_boost/nav-drawer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_academi/footer')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
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
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06185a8fbd36fbf8b70e542995872ba7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="region-main-settings-menu" class="d-print-none {{#hasblocks}}has-blocks{{/hasblocks}}">
                    <div> {{{ output.region_main_settings_menu }}} </div>
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
                
                $buffer .= $indent . '                <div id="region-main-settings-menu" class="d-print-none ';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= ' </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8b30bc710534302fe5cc09141cbd5c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="has-blocks mb-3"';
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
                
                $buffer .= 'class="has-blocks mb-3"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85b38e2ef114feb4bcec35483a18248f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="region_main_settings_menu_proxy"></div>
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
                
                $buffer .= $indent . '                                <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c0f68aa999de2ecf1fc4d91fb28f123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <section data-region="blocks-column" class="d-print-none">
                    {{{ sidepreblocks }}}
                </section>
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
                
                $buffer .= $indent . '                <section data-region="blocks-column" class="d-print-none">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
