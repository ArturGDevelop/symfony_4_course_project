<?php

/* micro-post/index.html.twig */
class __TwigTemplate_5fae122fdc4b9a7099e913c16bb2135441b2def79796d6231975dfdec027eccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "micro-post/index.html.twig", 1);
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
        $__internal_375821dfa618bf3a368bfb33f3a1a43c634c7d4776e4c667a95334bc317d42f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375821dfa618bf3a368bfb33f3a1a43c634c7d4776e4c667a95334bc317d42f3->enter($__internal_375821dfa618bf3a368bfb33f3a1a43c634c7d4776e4c667a95334bc317d42f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro-post/index.html.twig"));

        $__internal_3c4d8d7e5e472e481fe4d00d45b170ee257fbef54ee6aa74a518e83133307954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4d8d7e5e472e481fe4d00d45b170ee257fbef54ee6aa74a518e83133307954->enter($__internal_3c4d8d7e5e472e481fe4d00d45b170ee257fbef54ee6aa74a518e83133307954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro-post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_375821dfa618bf3a368bfb33f3a1a43c634c7d4776e4c667a95334bc317d42f3->leave($__internal_375821dfa618bf3a368bfb33f3a1a43c634c7d4776e4c667a95334bc317d42f3_prof);

        
        $__internal_3c4d8d7e5e472e481fe4d00d45b170ee257fbef54ee6aa74a518e83133307954->leave($__internal_3c4d8d7e5e472e481fe4d00d45b170ee257fbef54ee6aa74a518e83133307954_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0653657a605e624860c385c88e25c253a692f953bb31935e4ff831cf41380143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0653657a605e624860c385c88e25c253a692f953bb31935e4ff831cf41380143->enter($__internal_0653657a605e624860c385c88e25c253a692f953bb31935e4ff831cf41380143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_073f1eadf67b60cb82cf6ec49e4e37ed6be0e1a5037ae10ab0aafb8047216063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073f1eadf67b60cb82cf6ec49e4e37ed6be0e1a5037ae10ab0aafb8047216063->enter($__internal_073f1eadf67b60cb82cf6ec49e4e37ed6be0e1a5037ae10ab0aafb8047216063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        <div class=\"alert alert-success\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["usersToFollow"]) || array_key_exists("usersToFollow", $context) ? $context["usersToFollow"] : (function () { throw new Twig_Error_Runtime('Variable "usersToFollow" does not exist.', 10, $this->getSourceContext()); })())) > 0)) {
            // line 11
            echo "        <p>You currently do not follow anyone, you might find these users interesting: </p>

        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usersToFollow"]) || array_key_exists("usersToFollow", $context) ? $context["usersToFollow"] : (function () { throw new Twig_Error_Runtime('Variable "usersToFollow" does not exist.', 13, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["userToFollow"]) {
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("following_follow", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["userToFollow"], "id", array()))), "html", null, true);
                echo "\">
                @";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["userToFollow"], "username", array()), "html", null, true);
                echo ",</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userToFollow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
    ";
        } else {
            // line 19
            echo "        <h6 class=\"border-bottom border-gray pb-2 mb-0\">Recent updates</h6>

        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 21, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 22
                echo "            ";
                echo twig_include($this->env, $context, "micro-post/raw-post.html.twig", array("post" => $context["post"]));
                echo "

            <small class=\"d-block text-right mt-3\">
                ";
                // line 25
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", $context["post"])) {
                    // line 26
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("micro_post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
                    echo "\">Edit</a>
                ";
                }
                // line 28
                echo "                ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("delete", $context["post"])) {
                    // line 29
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("micro_post_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
                    echo "\">Delete</a>
                ";
                }
                // line 31
                echo "            </small>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        }
        
        $__internal_073f1eadf67b60cb82cf6ec49e4e37ed6be0e1a5037ae10ab0aafb8047216063->leave($__internal_073f1eadf67b60cb82cf6ec49e4e37ed6be0e1a5037ae10ab0aafb8047216063_prof);

        
        $__internal_0653657a605e624860c385c88e25c253a692f953bb31935e4ff831cf41380143->leave($__internal_0653657a605e624860c385c88e25c253a692f953bb31935e4ff831cf41380143_prof);

    }

    public function getTemplateName()
    {
        return "micro-post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 33,  141 => 31,  135 => 29,  132 => 28,  126 => 26,  124 => 25,  117 => 22,  100 => 21,  96 => 19,  92 => 17,  84 => 15,  79 => 14,  75 => 13,  71 => 11,  69 => 10,  66 => 9,  57 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% for message in app.flashes('notice') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    {% if usersToFollow|length > 0 %}
        <p>You currently do not follow anyone, you might find these users interesting: </p>

        {% for userToFollow in usersToFollow %}
            <a href=\"{{ path('following_follow', {'id': userToFollow.id}) }}\">
                @{{ userToFollow.username }},</a>
        {% endfor %}

    {% else %}
        <h6 class=\"border-bottom border-gray pb-2 mb-0\">Recent updates</h6>

        {% for post in posts %}
            {{ include('micro-post/raw-post.html.twig', { 'post': post }) }}

            <small class=\"d-block text-right mt-3\">
                {% if is_granted('edit', post) %}
                    <a href=\"{{ path('micro_post_edit', {'id': post.id}) }}\">Edit</a>
                {% endif %}
                {% if is_granted('delete', post) %}
                    <a href=\"{{ path('micro_post_delete', {'id': post.id}) }}\">Delete</a>
                {% endif %}
            </small>
        {% endfor %}
    {% endif %}
{% endblock %}", "micro-post/index.html.twig", "/home/vagrant/symfony-01/templates/micro-post/index.html.twig");
    }
}
