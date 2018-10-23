<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_78a6d6e1903d2ed6f11392903cccdd4e2d0422ecad1ea15c624a48f08e4e1570 extends Twig_Template
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
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.rdf.twig", "/home/vagrant/symfony-01/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
