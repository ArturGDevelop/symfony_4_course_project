<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d63a9370d934e1c06a22175fa33b6182fcd4dbb1964d8c3e31b8f123468a1da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b49ce50af75a7fa948fc818912708c0c794b52877394eaa1632b433188df5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b49ce50af75a7fa948fc818912708c0c794b52877394eaa1632b433188df5e8->enter($__internal_7b49ce50af75a7fa948fc818912708c0c794b52877394eaa1632b433188df5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bc60233bbe5c96be2ab0f1efdf72963388f70ccc8ef443bdfc55d62fc86b3ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc60233bbe5c96be2ab0f1efdf72963388f70ccc8ef443bdfc55d62fc86b3ec9->enter($__internal_bc60233bbe5c96be2ab0f1efdf72963388f70ccc8ef443bdfc55d62fc86b3ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b49ce50af75a7fa948fc818912708c0c794b52877394eaa1632b433188df5e8->leave($__internal_7b49ce50af75a7fa948fc818912708c0c794b52877394eaa1632b433188df5e8_prof);

        
        $__internal_bc60233bbe5c96be2ab0f1efdf72963388f70ccc8ef443bdfc55d62fc86b3ec9->leave($__internal_bc60233bbe5c96be2ab0f1efdf72963388f70ccc8ef443bdfc55d62fc86b3ec9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32239f5a29c32bfe223fd5b84d4b2ede5b77f147692956e4cacc2aabf507409a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32239f5a29c32bfe223fd5b84d4b2ede5b77f147692956e4cacc2aabf507409a->enter($__internal_32239f5a29c32bfe223fd5b84d4b2ede5b77f147692956e4cacc2aabf507409a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b7f704c628683e51b76bf450c47d427c49a567f0a1ce648784220ee73eb5b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b7f704c628683e51b76bf450c47d427c49a567f0a1ce648784220ee73eb5b4c->enter($__internal_7b7f704c628683e51b76bf450c47d427c49a567f0a1ce648784220ee73eb5b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7b7f704c628683e51b76bf450c47d427c49a567f0a1ce648784220ee73eb5b4c->leave($__internal_7b7f704c628683e51b76bf450c47d427c49a567f0a1ce648784220ee73eb5b4c_prof);

        
        $__internal_32239f5a29c32bfe223fd5b84d4b2ede5b77f147692956e4cacc2aabf507409a->leave($__internal_32239f5a29c32bfe223fd5b84d4b2ede5b77f147692956e4cacc2aabf507409a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56c271e03299c8b5ebbcc797b528c05d9ffaaa4205003cfa8583e6339cffef3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c271e03299c8b5ebbcc797b528c05d9ffaaa4205003cfa8583e6339cffef3b->enter($__internal_56c271e03299c8b5ebbcc797b528c05d9ffaaa4205003cfa8583e6339cffef3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eabb306be77f897557dd9686c14eb2f80b686531ff6a6cbfb604d23a720c0fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eabb306be77f897557dd9686c14eb2f80b686531ff6a6cbfb604d23a720c0fd4->enter($__internal_eabb306be77f897557dd9686c14eb2f80b686531ff6a6cbfb604d23a720c0fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_eabb306be77f897557dd9686c14eb2f80b686531ff6a6cbfb604d23a720c0fd4->leave($__internal_eabb306be77f897557dd9686c14eb2f80b686531ff6a6cbfb604d23a720c0fd4_prof);

        
        $__internal_56c271e03299c8b5ebbcc797b528c05d9ffaaa4205003cfa8583e6339cffef3b->leave($__internal_56c271e03299c8b5ebbcc797b528c05d9ffaaa4205003cfa8583e6339cffef3b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e18082c126daf4392422db404136d87a4f8cd261ef3706461b94d5e24333d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e18082c126daf4392422db404136d87a4f8cd261ef3706461b94d5e24333d99->enter($__internal_4e18082c126daf4392422db404136d87a4f8cd261ef3706461b94d5e24333d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca49920dca5d972ed7da86401d0ed4bf7621a1f4dea3d2ff1e043c1573487ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca49920dca5d972ed7da86401d0ed4bf7621a1f4dea3d2ff1e043c1573487ac7->enter($__internal_ca49920dca5d972ed7da86401d0ed4bf7621a1f4dea3d2ff1e043c1573487ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_ca49920dca5d972ed7da86401d0ed4bf7621a1f4dea3d2ff1e043c1573487ac7->leave($__internal_ca49920dca5d972ed7da86401d0ed4bf7621a1f4dea3d2ff1e043c1573487ac7_prof);

        
        $__internal_4e18082c126daf4392422db404136d87a4f8cd261ef3706461b94d5e24333d99->leave($__internal_4e18082c126daf4392422db404136d87a4f8cd261ef3706461b94d5e24333d99_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/vagrant/symfony-01/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
