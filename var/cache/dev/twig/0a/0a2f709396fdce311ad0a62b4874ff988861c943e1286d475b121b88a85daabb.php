<?php

/* micro-post/raw-post.html.twig */
class __TwigTemplate_1e8cbaa3e28efc7010b75f404d52cba259e47d7ec01d52c773da48ac8889b2f4 extends Twig_Template
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
        $__internal_f4c14608b9614a64f3dc0fc93566fa166661106160b77694a7f8b205ab6fa016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c14608b9614a64f3dc0fc93566fa166661106160b77694a7f8b205ab6fa016->enter($__internal_f4c14608b9614a64f3dc0fc93566fa166661106160b77694a7f8b205ab6fa016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro-post/raw-post.html.twig"));

        $__internal_04458d7187891d4e5b8beda4fc6b736f97d3920f3810be7d1cef3af9d4b9b977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04458d7187891d4e5b8beda4fc6b736f97d3920f3810be7d1cef3af9d4b9b977->enter($__internal_04458d7187891d4e5b8beda4fc6b736f97d3920f3810be7d1cef3af9d4b9b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro-post/raw-post.html.twig"));

        // line 1
        echo "<div class=\"media text-muted pt-3\">
    ";
        // line 2
        $context["initials"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 2, $this->getSourceContext()); })()), "user", array()), "fullName", array()), " ");
        // line 3
        echo "    <img data-src=\"holder.js/32x32?text=";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new Twig_Error_Runtime('Variable "initials" does not exist.', 3, $this->getSourceContext()); })()), 0)), "html", null, true);
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new Twig_Error_Runtime('Variable "initials" does not exist.', 3, $this->getSourceContext()); })()), 1)), "html", null, true);
        echo "&bg=e83e8c&fg=fff&size=8\" alt=\"\" class=\"mr-2 rounded\">
    <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
        <span class=\"d-block\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("micro_post_user", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 6, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
        echo "\">
                <strong class=\"text-gray-dark\">@";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "</strong>
            </a>
            <small>· ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 9, $this->getSourceContext()); })()), "time", array()), "d/m/Y"), "html", null, true);
        echo "</small></span>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("micro_post_post", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 10, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 10, $this->getSourceContext()); })()), "text", array()), "html", null, true);
        echo "</a>
    </p>
</div>";
        
        $__internal_f4c14608b9614a64f3dc0fc93566fa166661106160b77694a7f8b205ab6fa016->leave($__internal_f4c14608b9614a64f3dc0fc93566fa166661106160b77694a7f8b205ab6fa016_prof);

        
        $__internal_04458d7187891d4e5b8beda4fc6b736f97d3920f3810be7d1cef3af9d4b9b977->leave($__internal_04458d7187891d4e5b8beda4fc6b736f97d3920f3810be7d1cef3af9d4b9b977_prof);

    }

    public function getTemplateName()
    {
        return "micro-post/raw-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  42 => 7,  38 => 6,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"media text-muted pt-3\">
    {% set initials = post.user.fullName|split(' ') %}
    <img data-src=\"holder.js/32x32?text={{ attribute(initials, 0)|first }}{{ attribute(initials, 1)|first }}&bg=e83e8c&fg=fff&size=8\" alt=\"\" class=\"mr-2 rounded\">
    <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
        <span class=\"d-block\">
            <a href=\"{{ path('micro_post_user', {'username': post.user.username}) }}\">
                <strong class=\"text-gray-dark\">@{{ post.user.username }}</strong>
            </a>
            <small>· {{ post.time|date(\"d/m/Y\") }}</small></span>
        <a href=\"{{ path('micro_post_post', {'id': post.id }) }}\">{{ post.text }}</a>
    </p>
</div>", "micro-post/raw-post.html.twig", "/home/vagrant/symfony-01/templates/micro-post/raw-post.html.twig");
    }
}
