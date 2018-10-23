<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_138308f650513c042c53f4bababa4e1534046156f4951a65b31b44cd8a7291fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_465cbac16b0777c3afd44e8e8529597575d55a4f2798a57942c900473b106e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465cbac16b0777c3afd44e8e8529597575d55a4f2798a57942c900473b106e77->enter($__internal_465cbac16b0777c3afd44e8e8529597575d55a4f2798a57942c900473b106e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_453f420368e247e8358053bf2523b5ba3874e0302a5484574bf63ca59faa4abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453f420368e247e8358053bf2523b5ba3874e0302a5484574bf63ca59faa4abe->enter($__internal_453f420368e247e8358053bf2523b5ba3874e0302a5484574bf63ca59faa4abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_465cbac16b0777c3afd44e8e8529597575d55a4f2798a57942c900473b106e77->leave($__internal_465cbac16b0777c3afd44e8e8529597575d55a4f2798a57942c900473b106e77_prof);

        
        $__internal_453f420368e247e8358053bf2523b5ba3874e0302a5484574bf63ca59faa4abe->leave($__internal_453f420368e247e8358053bf2523b5ba3874e0302a5484574bf63ca59faa4abe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b3255b5e73e4e58dd4eef66f2a186f690a483b48738df89953b1ebc8f94919a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3255b5e73e4e58dd4eef66f2a186f690a483b48738df89953b1ebc8f94919a->enter($__internal_1b3255b5e73e4e58dd4eef66f2a186f690a483b48738df89953b1ebc8f94919a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4778d40595e9dac31b89d8c35036e4495c2a981502e5c4704815c2a50be4d545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4778d40595e9dac31b89d8c35036e4495c2a981502e5c4704815c2a50be4d545->enter($__internal_4778d40595e9dac31b89d8c35036e4495c2a981502e5c4704815c2a50be4d545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4778d40595e9dac31b89d8c35036e4495c2a981502e5c4704815c2a50be4d545->leave($__internal_4778d40595e9dac31b89d8c35036e4495c2a981502e5c4704815c2a50be4d545_prof);

        
        $__internal_1b3255b5e73e4e58dd4eef66f2a186f690a483b48738df89953b1ebc8f94919a->leave($__internal_1b3255b5e73e4e58dd4eef66f2a186f690a483b48738df89953b1ebc8f94919a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/vagrant/symfony-01/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
