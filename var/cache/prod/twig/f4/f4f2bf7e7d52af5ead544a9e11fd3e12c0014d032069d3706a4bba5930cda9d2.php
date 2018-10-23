<?php

/* blog/post.html.twig */
class __TwigTemplate_b46132a0d86c3bc3973c713a0191e011e22297b7c502707f2a408661e6d1a4a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/post.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <p>ID ";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "</p>
    <h3>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h3>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "text", array()), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "blog/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  43 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog/post.html.twig", "/home/vagrant/symfony-01/templates/blog/post.html.twig");
    }
}
