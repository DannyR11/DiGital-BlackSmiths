<?php

class __Mustache_21eeeb6c352743a7941389b79447299e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<footer id="page-footer" class="py-3 bg-dark text-light">
';
        // 'footerblock' section
        $value = $context->find('footerblock');
        $buffer .= $this->section273bda6bab4f57e01340cf3df41eef63($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '  </footer>
';
        $buffer .= $indent . '<!--E.O.Footer-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer>
';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '</footer>
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section6a13349808282e42b717fe155cd42dec($context, $indent, $value);

        return $buffer;
    }

    private function section6918f200ccb91fcabb254a73d86135fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-logo">
                <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
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
                
                $buffer .= $indent . '            <div class="footer-logo">
';
                $buffer .= $indent . '                <a href="#"><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="100" height="100" alt="Academi"></a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58dc2778c2099c20656e133bc5491ba8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-md-5">
            <div class="infoarea">
            {{#footlogo}}
            <div class="footer-logo">
                <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
            </div>
            {{/footlogo}}
                {{{footnote}}}
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
                
                $buffer .= $indent . '        <div class="col-md-5">
';
                $buffer .= $indent . '            <div class="infoarea">
';
                // 'footlogo' section
                $value = $context->find('footlogo');
                $buffer .= $this->section6918f200ccb91fcabb254a73d86135fd($context, $indent, $value);
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5242517171e22f03f613e8b3511a0bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-md-3">
            <div class="foot-links">
            <h2>{{s_info}}</h2>
             <ul>
                {{{infolink}}}
             </ul>
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
                
                $buffer .= $indent . '        <div class="col-md-3">
';
                $buffer .= $indent . '            <div class="foot-links">
';
                $buffer .= $indent . '            <h2>';
                $value = $this->resolveValue($context->find('s_info'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '             <ul>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('infolink'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '             </ul>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2dc230eaa5f231a2c48da121e346b77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{address}}';
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
                
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC124e096f60d98503b76eca582cdbe14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}<br>
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
                
                $buffer .= $indent . '              <i class="fa fa-phone-square"></i> ';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section486a30ee7aa9009959559cbd9a4e3ebc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a><br>
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
                
                $buffer .= $indent . '              <i class="fa fa-envelope"></i> ';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' : <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a><br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5041588008d2fccdfa484e0cf887c1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
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
                
                $buffer .= $indent . '                <li class="smedia-01"><a href="';
                $value = $this->resolveValue($context->find('fburl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><i class="fa fa-facebook-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44f451d8dfad0f7be267b98e554f8249(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
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
                
                $buffer .= $indent . '               <li class="smedia-02"><a href="';
                $value = $this->resolveValue($context->find('pinurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><i class="fa fa-pinterest-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC37059ef33fd41e8d49a39b2cc8ddedb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
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
                
                $buffer .= $indent . '                <li class="smedia-03"><a href="';
                $value = $this->resolveValue($context->find('twurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><i class="fa fa-twitter-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72be963a5b21a100fd8f42a608d12434(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
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
                
                $buffer .= $indent . '                <li class="smedia-04"><a href="';
                $value = $this->resolveValue($context->find('gpurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><i class="fa fa-google-plus-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd5923bc1798895ef71626afae72ee87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="social-media">
            <h6>{{s_followus}}</h6>
            <ul>
             {{# fburl}}
                <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
            {{/ fburl}}
            {{# pinurl}}
               <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
            {{/ pinurl}}
            {{# twurl}}
                <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
            {{/ twurl}}
            {{# gpurl}}
                <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
            {{/ gpurl}}
            </ul>
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
                
                $buffer .= $indent . '          <div class="social-media">
';
                $buffer .= $indent . '            <h6>';
                $value = $this->resolveValue($context->find('s_followus'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '            <ul>
';
                // 'fburl' section
                $value = $context->find('fburl');
                $buffer .= $this->sectionB5041588008d2fccdfa484e0cf887c1e($context, $indent, $value);
                // 'pinurl' section
                $value = $context->find('pinurl');
                $buffer .= $this->section44f451d8dfad0f7be267b98e554f8249($context, $indent, $value);
                // 'twurl' section
                $value = $context->find('twurl');
                $buffer .= $this->sectionC37059ef33fd41e8d49a39b2cc8ddedb($context, $indent, $value);
                // 'gpurl' section
                $value = $context->find('gpurl');
                $buffer .= $this->section72be963a5b21a100fd8f42a608d12434($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82394202c16f54625cf26ea4b4ca93e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-md-4">
          <div class="contact-info">
            <h2 class="nopadding">{{s_contact_us}}</h2>

             <p>{{# address}}{{address}}{{/ address}}<br>
            {{# phoneno}}
              <i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}<br>
            {{/ phoneno}}
            {{# emailid}}
              <i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a><br>
            {{/ emailid}}
            </p>

          </div>
         {{# url}}
          <div class="social-media">
            <h6>{{s_followus}}</h6>
            <ul>
             {{# fburl}}
                <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
            {{/ fburl}}
            {{# pinurl}}
               <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
            {{/ pinurl}}
            {{# twurl}}
                <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
            {{/ twurl}}
            {{# gpurl}}
                <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
            {{/ gpurl}}
            </ul>
          </div>
        {{/ url}}
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
                
                $buffer .= $indent . '        <div class="col-md-4">
';
                $buffer .= $indent . '          <div class="contact-info">
';
                $buffer .= $indent . '            <h2 class="nopadding">';
                $value = $this->resolveValue($context->find('s_contact_us'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '             <p>';
                // 'address' section
                $value = $context->find('address');
                $buffer .= $this->sectionB2dc230eaa5f231a2c48da121e346b77($context, $indent, $value);
                $buffer .= '<br>
';
                // 'phoneno' section
                $value = $context->find('phoneno');
                $buffer .= $this->sectionC124e096f60d98503b76eca582cdbe14($context, $indent, $value);
                // 'emailid' section
                $value = $context->find('emailid');
                $buffer .= $this->section486a30ee7aa9009959559cbd9a4e3ebc($context, $indent, $value);
                $buffer .= $indent . '            </p>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '          </div>
';
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->sectionEd5923bc1798895ef71626afae72ee87($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf3dd88b7386dbb8920ec0c0a9b62943(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="footer-bootom">
        <p>{{{copyright_footer}}}</p>
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
                
                $buffer .= $indent . '    <div class="footer-bootom">
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('copyright_footer'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31671085dfe67f94dd606665f52d6173(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul class="list-unstyled pt-3">
                {{> theme_boost/custom_menu_footer }}
            </ul>
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
                
                $buffer .= $indent . '            <ul class="list-unstyled pt-3">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section273bda6bab4f57e01340cf3df41eef63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="footer">
    <div class="footer-main">
    <div class="container">
    <div id="course-footer">{{{ output.course_footer }}}</div>
        <div class="row">
        {{#block1}}
        <div class="col-md-5">
            <div class="infoarea">
            {{#footlogo}}
            <div class="footer-logo">
                <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
            </div>
            {{/footlogo}}
                {{{footnote}}}
          </div>
        </div>
        {{/block1}}

        {{# infolink}}
        <div class="col-md-3">
            <div class="foot-links">
            <h2>{{s_info}}</h2>
             <ul>
                {{{infolink}}}
             </ul>
            </div>
        </div>
        {{/ infolink}}

        {{#block3}}
        <div class="col-md-4">
          <div class="contact-info">
            <h2 class="nopadding">{{s_contact_us}}</h2>

             <p>{{# address}}{{address}}{{/ address}}<br>
            {{# phoneno}}
              <i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}<br>
            {{/ phoneno}}
            {{# emailid}}
              <i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a><br>
            {{/ emailid}}
            </p>

          </div>
         {{# url}}
          <div class="social-media">
            <h6>{{s_followus}}</h6>
            <ul>
             {{# fburl}}
                <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
            {{/ fburl}}
            {{# pinurl}}
               <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
            {{/ pinurl}}
            {{# twurl}}
                <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
            {{/ twurl}}
            {{# gpurl}}
                <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
            {{/ gpurl}}
            </ul>
          </div>
        {{/ url}}
        </div>
        {{/block3}}
      </div>
    </div>
  </div>

    {{# copyright_footer}}
    <div class="footer-bootom">
        <p>{{{copyright_footer}}}</p>
    </div>
    {{/ copyright_footer}}

    <nav class="nav navbar-nav d-md-none">
        {{# output.custom_menu_flat }}
            <ul class="list-unstyled pt-3">
                {{> theme_boost/custom_menu_footer }}
            </ul>
        {{/ output.custom_menu_flat }}
    </nav>
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
                
                $buffer .= $indent . '<div id="footer">
';
                $buffer .= $indent . '    <div class="footer-main">
';
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '    <div id="course-footer">';
                $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="row">
';
                // 'block1' section
                $value = $context->find('block1');
                $buffer .= $this->section58dc2778c2099c20656e133bc5491ba8($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'infolink' section
                $value = $context->find('infolink');
                $buffer .= $this->sectionC5242517171e22f03f613e8b3511a0bd($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'block3' section
                $value = $context->find('block3');
                $buffer .= $this->section82394202c16f54625cf26ea4b4ca93e0($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                // 'copyright_footer' section
                $value = $context->find('copyright_footer');
                $buffer .= $this->sectionCf3dd88b7386dbb8920ec0c0a9b62943($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <nav class="nav navbar-nav d-md-none">
';
                // 'output.custom_menu_flat' section
                $value = $context->findDot('output.custom_menu_flat');
                $buffer .= $this->section31671085dfe67f94dd606665f52d6173($context, $indent, $value);
                $buffer .= $indent . '    </nav>
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a13349808282e42b717fe155cd42dec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/loader\']);
require([\'theme_boost/drawer\'], function(mod) {
    mod.init();
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
                
                $buffer .= $indent . 'require([\'theme_boost/loader\']);
';
                $buffer .= $indent . 'require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '    mod.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
