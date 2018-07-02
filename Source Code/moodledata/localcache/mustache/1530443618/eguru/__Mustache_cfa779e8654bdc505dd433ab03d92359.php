<?php

class __Mustache_cfa779e8654bdc505dd433ab03d92359 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<footer id="footer" class="py-3 bg-dark text-light">
';
        // 'blockarrange' section
        $value = $context->find('blockarrange');
        $buffer .= $this->sectionF2225e4547866f8ab675ed5ef4773f7c($context, $indent, $value);
        // 'copyright' section
        $value = $context->find('copyright');
        $buffer .= $this->section8306de3211d4417bc4bb08ea0dabe24c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer>
';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'output.page_doc_link' section
        $value = $context->findDot('output.page_doc_link');
        $buffer .= $this->section0e625375e9c857381d5ab90ac5c70ef6($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section118dc35aa27e33b5ed6706019f637f46($context, $indent, $value);

        return $buffer;
    }

    private function sectionD2bbfd7d0191928f8c72e670a28e0843(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="logo-footer">
                            <a href="{{{ config.wwwroot }}}/?redirect=0">
                                <img src="{{logourl}}" width="183" height="67" alt="Eguru">
                            </a>
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
                
                $buffer .= $indent . '                        <div class="logo-footer">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/?redirect=0">
';
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="183" height="67" alt="Eguru">
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe35bfbad7fbdca9c1a044b25245225f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{colclass}}">
                    <div class="footer-desc">
                        {{#footerlogo}}
                        <div class="logo-footer">
                            <a href="{{{ config.wwwroot }}}/?redirect=0">
                                <img src="{{logourl}}" width="183" height="67" alt="Eguru">
                            </a>
                        </div>
                        {{/footerlogo}}
                        <p>{{footnote}}</p>
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
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="footer-desc">
';
                // 'footerlogo' section
                $value = $context->find('footerlogo');
                $buffer .= $this->sectionD2bbfd7d0191928f8c72e670a28e0843($context, $indent, $value);
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEad9d86aa8d60e8633760be6b39012c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{colclass}}">
                    <div class="footer-nav">
                        <h4>{{footerbtitle2}}</h4>
                        <ul>
                           {{{footerlinks}}}
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
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="footer-nav">
';
                $buffer .= $indent . '                        <h4>';
                $value = $this->resolveValue($context->find('footerbtitle2'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                        <ul>
';
                $buffer .= $indent . '                           ';
                $value = $this->resolveValue($context->find('footerlinks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f456fa6a2b691b0245dc6689ca6b398(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="smedia-01">
                                <a href="{{fburl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{fb}}"></i>
                                    </span>
                                    <span class="media-name">{{fbn}}</span>
                                </a>
                            </li>
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
                
                $buffer .= $indent . '                            <li class="smedia-01">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('fburl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                    <span class="media-icon">
';
                $buffer .= $indent . '                                    <i class="fa ';
                $value = $this->resolveValue($context->find('fb'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                    </span>
';
                $buffer .= $indent . '                                    <span class="media-name">';
                $value = $this->resolveValue($context->find('fbn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section979a1d70315788b364099fe1e9177f9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="smedia-02">
                                <a href="{{twurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{tw}}"></i>
                                    </span>
                                    <span class="media-name">{{twn}}</span>
                                </a>
                            </li>
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
                
                $buffer .= $indent . '                            <li class="smedia-02">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('twurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                    <span class="media-icon">
';
                $buffer .= $indent . '                                    <i class="fa ';
                $value = $this->resolveValue($context->find('tw'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                    </span>
';
                $buffer .= $indent . '                                    <span class="media-name">';
                $value = $this->resolveValue($context->find('twn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f3481e715d1f697bf4dadb54b6eac58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="smedia-03">
                                <a href="{{gpurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{gp}}"></i>
                                    </span>
                                    <span class="media-name">{{gpn}}</span>
                                </a>
                            </li>
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
                
                $buffer .= $indent . '                            <li class="smedia-03">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('gpurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                    <span class="media-icon">
';
                $buffer .= $indent . '                                    <i class="fa ';
                $value = $this->resolveValue($context->find('gp'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                    </span>
';
                $buffer .= $indent . '                                    <span class="media-name">';
                $value = $this->resolveValue($context->find('gpn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3f34ef581864e99038a90fda97b9eb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="smedia-04">
                                <a href="{{pinurl}}" target="_blank">
                                   <span class="media-icon">
                                   <i class="fa {{pi}}"></i>
                                   </span>
                                   <span class="media-name">{{pin}}</span>
                                </a>
                            </li>
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
                
                $buffer .= $indent . '                            <li class="smedia-04">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('pinurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                   <span class="media-icon">
';
                $buffer .= $indent . '                                   <i class="fa ';
                $value = $this->resolveValue($context->find('pi'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                   </span>
';
                $buffer .= $indent . '                                   <span class="media-name">';
                $value = $this->resolveValue($context->find('pin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57b120db9f3076542357a52466c5364a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{colclass}}">
                    <div class="social-media">
                        <h4>{{footerbtitle3}}</h4>
                        <ul>
                            {{# fburl}}
                            <li class="smedia-01">
                                <a href="{{fburl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{fb}}"></i>
                                    </span>
                                    <span class="media-name">{{fbn}}</span>
                                </a>
                            </li>
                            {{/ fburl}}

                            {{# twurl}}
                            <li class="smedia-02">
                                <a href="{{twurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{tw}}"></i>
                                    </span>
                                    <span class="media-name">{{twn}}</span>
                                </a>
                            </li>
                            {{/ twurl}}

                            {{# gpurl}}
                            <li class="smedia-03">
                                <a href="{{gpurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{gp}}"></i>
                                    </span>
                                    <span class="media-name">{{gpn}}</span>
                                </a>
                            </li>
                            {{/ gpurl}}

                            {{# pinurl}}
                            <li class="smedia-04">
                                <a href="{{pinurl}}" target="_blank">
                                   <span class="media-icon">
                                   <i class="fa {{pi}}"></i>
                                   </span>
                                   <span class="media-name">{{pin}}</span>
                                </a>
                            </li>
                            {{/ pinurl}}
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
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="social-media">
';
                $buffer .= $indent . '                        <h4>';
                $value = $this->resolveValue($context->find('footerbtitle3'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                        <ul>
';
                // 'fburl' section
                $value = $context->find('fburl');
                $buffer .= $this->section9f456fa6a2b691b0245dc6689ca6b398($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'twurl' section
                $value = $context->find('twurl');
                $buffer .= $this->section979a1d70315788b364099fe1e9177f9d($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'gpurl' section
                $value = $context->find('gpurl');
                $buffer .= $this->section2f3481e715d1f697bf4dadb54b6eac58($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'pinurl' section
                $value = $context->find('pinurl');
                $buffer .= $this->sectionF3f34ef581864e99038a90fda97b9eb6($context, $indent, $value);
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD44718f8e8bc8b023f0a5b31524ed095(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p><i class="fa fa-phone-square"></i>{{phone}}: {{phoneno}}</p>
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
                
                $buffer .= $indent . '                            <p><i class="fa fa-phone-square"></i>';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a7000466143b6c602b0014f4611fbe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p><i class="fa fa-envelope"></i>
                            {{mail}} <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a>
                            </p>
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
                
                $buffer .= $indent . '                            <p><i class="fa fa-envelope"></i>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6ee7f4ace0341ea85cc77b39cabf7c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{colclass}}">
                    <div class="footer-contact">
                        <h4>{{footerbtitle4}}</h4>
                        <p>{{address}}</p>
                        {{# phoneno}}
                            <p><i class="fa fa-phone-square"></i>{{phone}}: {{phoneno}}</p>
                        {{/ phoneno}}

                        {{# emailid}}
                            <p><i class="fa fa-envelope"></i>
                            {{mail}} <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a>
                            </p>
                        {{/ emailid}}

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
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="footer-contact">
';
                $buffer .= $indent . '                        <h4>';
                $value = $this->resolveValue($context->find('footerbtitle4'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                // 'phoneno' section
                $value = $context->find('phoneno');
                $buffer .= $this->sectionD44718f8e8bc8b023f0a5b31524ed095($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'emailid' section
                $value = $context->find('emailid');
                $buffer .= $this->section1a7000466143b6c602b0014f4611fbe5($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2225e4547866f8ab675ed5ef4773f7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="footer-main">
        <div class="container">
            <div class="row">
                {{#block1}}
                <div class="{{colclass}}">
                    <div class="footer-desc">
                        {{#footerlogo}}
                        <div class="logo-footer">
                            <a href="{{{ config.wwwroot }}}/?redirect=0">
                                <img src="{{logourl}}" width="183" height="67" alt="Eguru">
                            </a>
                        </div>
                        {{/footerlogo}}
                        <p>{{footnote}}</p>
                    </div>
                </div>
                {{/block1}}
                {{#block2}}
                <div class="{{colclass}}">
                    <div class="footer-nav">
                        <h4>{{footerbtitle2}}</h4>
                        <ul>
                           {{{footerlinks}}}
                        </ul>
                    </div>
                </div>
                {{/block2}}
                {{# block3}}
                <div class="{{colclass}}">
                    <div class="social-media">
                        <h4>{{footerbtitle3}}</h4>
                        <ul>
                            {{# fburl}}
                            <li class="smedia-01">
                                <a href="{{fburl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{fb}}"></i>
                                    </span>
                                    <span class="media-name">{{fbn}}</span>
                                </a>
                            </li>
                            {{/ fburl}}

                            {{# twurl}}
                            <li class="smedia-02">
                                <a href="{{twurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{tw}}"></i>
                                    </span>
                                    <span class="media-name">{{twn}}</span>
                                </a>
                            </li>
                            {{/ twurl}}

                            {{# gpurl}}
                            <li class="smedia-03">
                                <a href="{{gpurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{gp}}"></i>
                                    </span>
                                    <span class="media-name">{{gpn}}</span>
                                </a>
                            </li>
                            {{/ gpurl}}

                            {{# pinurl}}
                            <li class="smedia-04">
                                <a href="{{pinurl}}" target="_blank">
                                   <span class="media-icon">
                                   <i class="fa {{pi}}"></i>
                                   </span>
                                   <span class="media-name">{{pin}}</span>
                                </a>
                            </li>
                            {{/ pinurl}}
                        </ul>
                    </div>
                </div>
                {{/ block3}}
                {{#block4}}
                <div class="{{colclass}}">
                    <div class="footer-contact">
                        <h4>{{footerbtitle4}}</h4>
                        <p>{{address}}</p>
                        {{# phoneno}}
                            <p><i class="fa fa-phone-square"></i>{{phone}}: {{phoneno}}</p>
                        {{/ phoneno}}

                        {{# emailid}}
                            <p><i class="fa fa-envelope"></i>
                            {{mail}} <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a>
                            </p>
                        {{/ emailid}}

                    </div>
                </div>
                {{/block4}}
            </div>
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
                
                $buffer .= $indent . '    <div class="footer-main">
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '            <div class="row">
';
                // 'block1' section
                $value = $context->find('block1');
                $buffer .= $this->sectionAe35bfbad7fbdca9c1a044b25245225f($context, $indent, $value);
                // 'block2' section
                $value = $context->find('block2');
                $buffer .= $this->sectionEad9d86aa8d60e8633760be6b39012c1($context, $indent, $value);
                // 'block3' section
                $value = $context->find('block3');
                $buffer .= $this->section57b120db9f3076542357a52466c5364a($context, $indent, $value);
                // 'block4' section
                $value = $context->find('block4');
                $buffer .= $this->sectionC6ee7f4ace0341ea85cc77b39cabf7c3($context, $indent, $value);
                $buffer .= $indent . '            </div>
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

    private function section8306de3211d4417bc4bb08ea0dabe24c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="footer-foot">
    <div class="container">{{{copyright}}}</div>
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
                
                $buffer .= $indent . '<div class="footer-foot">
';
                $buffer .= $indent . '    <div class="container">';
                $value = $this->resolveValue($context->find('copyright'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e625375e9c857381d5ab90ac5c70ef6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <p class="helplink">{{{ output.page_doc_link }}}</p>
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
                
                $buffer .= $indent . '    <p class="helplink">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section118dc35aa27e33b5ed6706019f637f46(Mustache_Context $context, $indent, $value)
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
