<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0c420cb3c08da6f51333305ff7ef3fd25ff49f495d1ba81fabe99d6aef429095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5811a25956ac56b8aa542d0768507024e451b2af6e5cab23ed7f0bcfa7a45ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5811a25956ac56b8aa542d0768507024e451b2af6e5cab23ed7f0bcfa7a45ca1->enter($__internal_5811a25956ac56b8aa542d0768507024e451b2af6e5cab23ed7f0bcfa7a45ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6d02f07bc4b72d10ade76b2c8f3abd76973e4261e6a61fad3549785075ecdc73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d02f07bc4b72d10ade76b2c8f3abd76973e4261e6a61fad3549785075ecdc73->enter($__internal_6d02f07bc4b72d10ade76b2c8f3abd76973e4261e6a61fad3549785075ecdc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5811a25956ac56b8aa542d0768507024e451b2af6e5cab23ed7f0bcfa7a45ca1->leave($__internal_5811a25956ac56b8aa542d0768507024e451b2af6e5cab23ed7f0bcfa7a45ca1_prof);

        
        $__internal_6d02f07bc4b72d10ade76b2c8f3abd76973e4261e6a61fad3549785075ecdc73->leave($__internal_6d02f07bc4b72d10ade76b2c8f3abd76973e4261e6a61fad3549785075ecdc73_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8810fc9cd81e885b32611ee2cbf47f7f3c4af4529e528b15817fdbc4d703ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8810fc9cd81e885b32611ee2cbf47f7f3c4af4529e528b15817fdbc4d703ca8->enter($__internal_a8810fc9cd81e885b32611ee2cbf47f7f3c4af4529e528b15817fdbc4d703ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_874785a938b8c7b5765863b4a38127b2ab96edb21a38513e12053ad3ffe06323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874785a938b8c7b5765863b4a38127b2ab96edb21a38513e12053ad3ffe06323->enter($__internal_874785a938b8c7b5765863b4a38127b2ab96edb21a38513e12053ad3ffe06323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_874785a938b8c7b5765863b4a38127b2ab96edb21a38513e12053ad3ffe06323->leave($__internal_874785a938b8c7b5765863b4a38127b2ab96edb21a38513e12053ad3ffe06323_prof);

        
        $__internal_a8810fc9cd81e885b32611ee2cbf47f7f3c4af4529e528b15817fdbc4d703ca8->leave($__internal_a8810fc9cd81e885b32611ee2cbf47f7f3c4af4529e528b15817fdbc4d703ca8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7dccc1f0171cb6585f1de0ccb1504f688d43d8784a3519051122b77bee171195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dccc1f0171cb6585f1de0ccb1504f688d43d8784a3519051122b77bee171195->enter($__internal_7dccc1f0171cb6585f1de0ccb1504f688d43d8784a3519051122b77bee171195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c8be56f13b802cec3f2aa2433dbe0704960b6c7c11c648a1cc0c9548a5d4a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8be56f13b802cec3f2aa2433dbe0704960b6c7c11c648a1cc0c9548a5d4a3c->enter($__internal_8c8be56f13b802cec3f2aa2433dbe0704960b6c7c11c648a1cc0c9548a5d4a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8c8be56f13b802cec3f2aa2433dbe0704960b6c7c11c648a1cc0c9548a5d4a3c->leave($__internal_8c8be56f13b802cec3f2aa2433dbe0704960b6c7c11c648a1cc0c9548a5d4a3c_prof);

        
        $__internal_7dccc1f0171cb6585f1de0ccb1504f688d43d8784a3519051122b77bee171195->leave($__internal_7dccc1f0171cb6585f1de0ccb1504f688d43d8784a3519051122b77bee171195_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_33e1fa6d26565a498f731d4bfe8bdb7e4f3f00f15d92e906d431ce7f11f9d2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e1fa6d26565a498f731d4bfe8bdb7e4f3f00f15d92e906d431ce7f11f9d2db->enter($__internal_33e1fa6d26565a498f731d4bfe8bdb7e4f3f00f15d92e906d431ce7f11f9d2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a19dcf152a1823b0d0cbe03ce0ba3f28676c85fbc5986db91072f62c6fbf3061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19dcf152a1823b0d0cbe03ce0ba3f28676c85fbc5986db91072f62c6fbf3061->enter($__internal_a19dcf152a1823b0d0cbe03ce0ba3f28676c85fbc5986db91072f62c6fbf3061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a19dcf152a1823b0d0cbe03ce0ba3f28676c85fbc5986db91072f62c6fbf3061->leave($__internal_a19dcf152a1823b0d0cbe03ce0ba3f28676c85fbc5986db91072f62c6fbf3061_prof);

        
        $__internal_33e1fa6d26565a498f731d4bfe8bdb7e4f3f00f15d92e906d431ce7f11f9d2db->leave($__internal_33e1fa6d26565a498f731d4bfe8bdb7e4f3f00f15d92e906d431ce7f11f9d2db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/vagrant/symfony-01/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
