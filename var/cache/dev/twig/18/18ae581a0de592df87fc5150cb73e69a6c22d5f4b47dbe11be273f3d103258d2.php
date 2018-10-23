<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_414fbc4192638a0c587b15b1c7eadc6d259f909d89057573b44b54cdb9c893aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f0d003dee09afee4f7640079b84936eabc83e4b80eb8eb43ba50b1e706f3a64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d003dee09afee4f7640079b84936eabc83e4b80eb8eb43ba50b1e706f3a64c->enter($__internal_f0d003dee09afee4f7640079b84936eabc83e4b80eb8eb43ba50b1e706f3a64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c7c8fdaa13df182df88ea61f5682117a11b1761e68db41a59a9ba9bba0d13dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c8fdaa13df182df88ea61f5682117a11b1761e68db41a59a9ba9bba0d13dd5->enter($__internal_c7c8fdaa13df182df88ea61f5682117a11b1761e68db41a59a9ba9bba0d13dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d003dee09afee4f7640079b84936eabc83e4b80eb8eb43ba50b1e706f3a64c->leave($__internal_f0d003dee09afee4f7640079b84936eabc83e4b80eb8eb43ba50b1e706f3a64c_prof);

        
        $__internal_c7c8fdaa13df182df88ea61f5682117a11b1761e68db41a59a9ba9bba0d13dd5->leave($__internal_c7c8fdaa13df182df88ea61f5682117a11b1761e68db41a59a9ba9bba0d13dd5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb09210bd8a2cd190b5276f46e39f2fefa3878f2b8a1576e1636c57bfa39b21b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb09210bd8a2cd190b5276f46e39f2fefa3878f2b8a1576e1636c57bfa39b21b->enter($__internal_fb09210bd8a2cd190b5276f46e39f2fefa3878f2b8a1576e1636c57bfa39b21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_28c2b7e892cfb6a84f5f7da470e0d4fead3f8500f347321a1cec0c1f7ab80fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c2b7e892cfb6a84f5f7da470e0d4fead3f8500f347321a1cec0c1f7ab80fb0->enter($__internal_28c2b7e892cfb6a84f5f7da470e0d4fead3f8500f347321a1cec0c1f7ab80fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28c2b7e892cfb6a84f5f7da470e0d4fead3f8500f347321a1cec0c1f7ab80fb0->leave($__internal_28c2b7e892cfb6a84f5f7da470e0d4fead3f8500f347321a1cec0c1f7ab80fb0_prof);

        
        $__internal_fb09210bd8a2cd190b5276f46e39f2fefa3878f2b8a1576e1636c57bfa39b21b->leave($__internal_fb09210bd8a2cd190b5276f46e39f2fefa3878f2b8a1576e1636c57bfa39b21b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed397dd33f84e4c1c410b89193585b0f99c88d69a6c9c0d69cabdecb18b81cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed397dd33f84e4c1c410b89193585b0f99c88d69a6c9c0d69cabdecb18b81cba->enter($__internal_ed397dd33f84e4c1c410b89193585b0f99c88d69a6c9c0d69cabdecb18b81cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ae87acba574a3c19e3a3ad6457ccdc42d7c74a350f6a9ce9a5108ee6c43f49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae87acba574a3c19e3a3ad6457ccdc42d7c74a350f6a9ce9a5108ee6c43f49b->enter($__internal_1ae87acba574a3c19e3a3ad6457ccdc42d7c74a350f6a9ce9a5108ee6c43f49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ae87acba574a3c19e3a3ad6457ccdc42d7c74a350f6a9ce9a5108ee6c43f49b->leave($__internal_1ae87acba574a3c19e3a3ad6457ccdc42d7c74a350f6a9ce9a5108ee6c43f49b_prof);

        
        $__internal_ed397dd33f84e4c1c410b89193585b0f99c88d69a6c9c0d69cabdecb18b81cba->leave($__internal_ed397dd33f84e4c1c410b89193585b0f99c88d69a6c9c0d69cabdecb18b81cba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bbc0d9ece0ed744e20d58504205d4365a6095ef49e7ba42dbce83f53bc6be88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbc0d9ece0ed744e20d58504205d4365a6095ef49e7ba42dbce83f53bc6be88->enter($__internal_3bbc0d9ece0ed744e20d58504205d4365a6095ef49e7ba42dbce83f53bc6be88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_748cc157ede73921bfaf7edaf7435a9d1caac3aa19c2b0129ffdb8d63dbeff1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748cc157ede73921bfaf7edaf7435a9d1caac3aa19c2b0129ffdb8d63dbeff1e->enter($__internal_748cc157ede73921bfaf7edaf7435a9d1caac3aa19c2b0129ffdb8d63dbeff1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_748cc157ede73921bfaf7edaf7435a9d1caac3aa19c2b0129ffdb8d63dbeff1e->leave($__internal_748cc157ede73921bfaf7edaf7435a9d1caac3aa19c2b0129ffdb8d63dbeff1e_prof);

        
        $__internal_3bbc0d9ece0ed744e20d58504205d4365a6095ef49e7ba42dbce83f53bc6be88->leave($__internal_3bbc0d9ece0ed744e20d58504205d4365a6095ef49e7ba42dbce83f53bc6be88_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vagrant/symfony-01/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
