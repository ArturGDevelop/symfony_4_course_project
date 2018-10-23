<?php

/* bundles/TwigBundle/Exception/error404.html.twig */
class __TwigTemplate_7c17b76bf5fffffabb2cfc9ce0216deac368630d9230707340fccf4adcc96337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bundles/TwigBundle/Exception/error404.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Very bad thing happened!</h1>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "bundles/TwigBundle/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bundles/TwigBundle/Exception/error404.html.twig", "/home/vagrant/symfony-01/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}
