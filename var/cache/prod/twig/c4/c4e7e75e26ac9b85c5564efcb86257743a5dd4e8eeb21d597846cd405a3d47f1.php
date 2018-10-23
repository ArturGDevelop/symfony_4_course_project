<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b1e90d417ff0480657924ccd1ae9f2a52b0e850ffd792d89862594e6591b84a1 extends Twig_Template
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
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.atom.twig", "/home/vagrant/symfony-01/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
