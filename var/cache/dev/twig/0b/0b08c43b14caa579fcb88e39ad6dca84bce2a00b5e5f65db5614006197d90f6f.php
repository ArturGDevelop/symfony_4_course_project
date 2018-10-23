<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_df5bf6a351a015133184315828f26c10bb4573bbc9016e7ebe6c9273293a5804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8fed8001bc3b44b4403525cb8cc6e416efab53d16b19fb570f78be50521210c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fed8001bc3b44b4403525cb8cc6e416efab53d16b19fb570f78be50521210c->enter($__internal_d8fed8001bc3b44b4403525cb8cc6e416efab53d16b19fb570f78be50521210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f35fce84a09f46d3bb48ef39cfae5683f91508320453de7abebd9285031040fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35fce84a09f46d3bb48ef39cfae5683f91508320453de7abebd9285031040fa->enter($__internal_f35fce84a09f46d3bb48ef39cfae5683f91508320453de7abebd9285031040fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8fed8001bc3b44b4403525cb8cc6e416efab53d16b19fb570f78be50521210c->leave($__internal_d8fed8001bc3b44b4403525cb8cc6e416efab53d16b19fb570f78be50521210c_prof);

        
        $__internal_f35fce84a09f46d3bb48ef39cfae5683f91508320453de7abebd9285031040fa->leave($__internal_f35fce84a09f46d3bb48ef39cfae5683f91508320453de7abebd9285031040fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9554194c822b1b27d4b9495e42f0cc405aa14365ad6ad542d1eb2160fcf00816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9554194c822b1b27d4b9495e42f0cc405aa14365ad6ad542d1eb2160fcf00816->enter($__internal_9554194c822b1b27d4b9495e42f0cc405aa14365ad6ad542d1eb2160fcf00816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_47259953d819bbf2fed4778c18ed56f2ff802df8d442096706bc2be9c12a51db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47259953d819bbf2fed4778c18ed56f2ff802df8d442096706bc2be9c12a51db->enter($__internal_47259953d819bbf2fed4778c18ed56f2ff802df8d442096706bc2be9c12a51db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_47259953d819bbf2fed4778c18ed56f2ff802df8d442096706bc2be9c12a51db->leave($__internal_47259953d819bbf2fed4778c18ed56f2ff802df8d442096706bc2be9c12a51db_prof);

        
        $__internal_9554194c822b1b27d4b9495e42f0cc405aa14365ad6ad542d1eb2160fcf00816->leave($__internal_9554194c822b1b27d4b9495e42f0cc405aa14365ad6ad542d1eb2160fcf00816_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_06cbc4d8cf7923a19f2fb99c4575b72db736ab07caceb6af982eff71b4feb153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cbc4d8cf7923a19f2fb99c4575b72db736ab07caceb6af982eff71b4feb153->enter($__internal_06cbc4d8cf7923a19f2fb99c4575b72db736ab07caceb6af982eff71b4feb153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3fbcba292b5c2e90a38628dd64b67c9be1cdc4a86f9a0a409feb4969b63b5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fbcba292b5c2e90a38628dd64b67c9be1cdc4a86f9a0a409feb4969b63b5e6->enter($__internal_d3fbcba292b5c2e90a38628dd64b67c9be1cdc4a86f9a0a409feb4969b63b5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d3fbcba292b5c2e90a38628dd64b67c9be1cdc4a86f9a0a409feb4969b63b5e6->leave($__internal_d3fbcba292b5c2e90a38628dd64b67c9be1cdc4a86f9a0a409feb4969b63b5e6_prof);

        
        $__internal_06cbc4d8cf7923a19f2fb99c4575b72db736ab07caceb6af982eff71b4feb153->leave($__internal_06cbc4d8cf7923a19f2fb99c4575b72db736ab07caceb6af982eff71b4feb153_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_efd2c41fa5a1f9ff6d23fa2e8fdb8d1215a6b7a694adce215d4b8d8f52bbc471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd2c41fa5a1f9ff6d23fa2e8fdb8d1215a6b7a694adce215d4b8d8f52bbc471->enter($__internal_efd2c41fa5a1f9ff6d23fa2e8fdb8d1215a6b7a694adce215d4b8d8f52bbc471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9592a72eea5c9629c3d1f98ab8c11c02a7ac51f5923fa7bd7afbfa03cc28fc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9592a72eea5c9629c3d1f98ab8c11c02a7ac51f5923fa7bd7afbfa03cc28fc20->enter($__internal_9592a72eea5c9629c3d1f98ab8c11c02a7ac51f5923fa7bd7afbfa03cc28fc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9592a72eea5c9629c3d1f98ab8c11c02a7ac51f5923fa7bd7afbfa03cc28fc20->leave($__internal_9592a72eea5c9629c3d1f98ab8c11c02a7ac51f5923fa7bd7afbfa03cc28fc20_prof);

        
        $__internal_efd2c41fa5a1f9ff6d23fa2e8fdb8d1215a6b7a694adce215d4b8d8f52bbc471->leave($__internal_efd2c41fa5a1f9ff6d23fa2e8fdb8d1215a6b7a694adce215d4b8d8f52bbc471_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/vagrant/symfony-01/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
