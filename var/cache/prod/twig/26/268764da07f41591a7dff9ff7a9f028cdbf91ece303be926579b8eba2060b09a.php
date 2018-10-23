<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_81f1de3e6d8340954eb936734f390b736b23a6bb04064179262b5a7703c6acfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception.rdf.twig", "/home/vagrant/symfony-01/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
