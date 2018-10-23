<?php

/* base.html.twig */
class __TwigTemplate_4ab3415432b7be8d58f6079d7551995c2c22b2cad438afb4dba4be9dcc6acc48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94e7f2548baf107f1024b7dd6f895b69e076fb471218e3d937c5935ab6e63db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e7f2548baf107f1024b7dd6f895b69e076fb471218e3d937c5935ab6e63db3->enter($__internal_94e7f2548baf107f1024b7dd6f895b69e076fb471218e3d937c5935ab6e63db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3cbb6ac72444b7ad36590e80ca60d05a339e70523b3d588b0a997f8577ab69b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cbb6ac72444b7ad36590e80ca60d05a339e70523b3d588b0a997f8577ab69b1->enter($__internal_3cbb6ac72444b7ad36590e80ca60d05a339e70523b3d588b0a997f8577ab69b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<body class=\"bg-light\">

<nav class=\"navbar navbar-dark navbar-expand-md sticky-top bg-dark p-0\">
    <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\"
       href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("micro_post_index");
        echo "\">Micro Post App</a>
    <div class=\"w-100 order-1 order-md-0\">
        <ul class=\"navbar-nav px-3\">
            ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 20
            echo "                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("micro_post_add");
            echo "\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 26
        echo "        </ul>
    </div>

    <div class=\"order-2 order-md-1\">
        <ul class=\"navbar-nav px-3\">
            ";
        // line 31
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 32
            echo "                <li class=\"nav-item text-nowrap border-right border-secondary\">
                    <a class=\"nav-link\" href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification_all");
            echo "\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Notifications"), "html", null, true);
            echo "
                        <span class=\"badge badge-light\" id=\"notification-count\">
                            <i class=\"fa fa-circle fa-circle-o-notch fa-spin\"></i>
                        </span>
                    </a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"#\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->getSourceContext()); })()), "user", array()), "fullName", array()), "html", null, true);
            echo "</a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutPath(), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign out"), "html", null, true);
            echo "</a>
                </li>
            ";
        } else {
            // line 49
            echo "                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 54
        echo "        </ul>
    </div>
</nav>

<main role=\"main\" class=\"container\">
    <div class=\"my-3 p-3 bg-white rounded box-shadow\">
        ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "    </div>
</main>
";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "</body>
</html>
";
        
        $__internal_94e7f2548baf107f1024b7dd6f895b69e076fb471218e3d937c5935ab6e63db3->leave($__internal_94e7f2548baf107f1024b7dd6f895b69e076fb471218e3d937c5935ab6e63db3_prof);

        
        $__internal_3cbb6ac72444b7ad36590e80ca60d05a339e70523b3d588b0a997f8577ab69b1->leave($__internal_3cbb6ac72444b7ad36590e80ca60d05a339e70523b3d588b0a997f8577ab69b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80d38ca95a884dd8ba4fe33a1b271deda56a789a2838c7e1f061c3086e500321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d38ca95a884dd8ba4fe33a1b271deda56a789a2838c7e1f061c3086e500321->enter($__internal_80d38ca95a884dd8ba4fe33a1b271deda56a789a2838c7e1f061c3086e500321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e363bdac6fbf72bce10cb0ef803383960be0e981a6fc8c546d9aeb87800c690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e363bdac6fbf72bce10cb0ef803383960be0e981a6fc8c546d9aeb87800c690->enter($__internal_2e363bdac6fbf72bce10cb0ef803383960be0e981a6fc8c546d9aeb87800c690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2e363bdac6fbf72bce10cb0ef803383960be0e981a6fc8c546d9aeb87800c690->leave($__internal_2e363bdac6fbf72bce10cb0ef803383960be0e981a6fc8c546d9aeb87800c690_prof);

        
        $__internal_80d38ca95a884dd8ba4fe33a1b271deda56a789a2838c7e1f061c3086e500321->leave($__internal_80d38ca95a884dd8ba4fe33a1b271deda56a789a2838c7e1f061c3086e500321_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc9619525d8dc8fd0932dcffd66e8f96dfd87756049aa261091a3ff71b1e9931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9619525d8dc8fd0932dcffd66e8f96dfd87756049aa261091a3ff71b1e9931->enter($__internal_fc9619525d8dc8fd0932dcffd66e8f96dfd87756049aa261091a3ff71b1e9931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c14713b818253a7a66db5aaf05fc9663853e1f8a0c57068db8bc31181b567a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14713b818253a7a66db5aaf05fc9663853e1f8a0c57068db8bc31181b567a74->enter($__internal_c14713b818253a7a66db5aaf05fc9663853e1f8a0c57068db8bc31181b567a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    ";
        
        $__internal_c14713b818253a7a66db5aaf05fc9663853e1f8a0c57068db8bc31181b567a74->leave($__internal_c14713b818253a7a66db5aaf05fc9663853e1f8a0c57068db8bc31181b567a74_prof);

        
        $__internal_fc9619525d8dc8fd0932dcffd66e8f96dfd87756049aa261091a3ff71b1e9931->leave($__internal_fc9619525d8dc8fd0932dcffd66e8f96dfd87756049aa261091a3ff71b1e9931_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3930bd8086fb950006f42bb2bf76881ace60ed1380292fdae01da02481d78b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3930bd8086fb950006f42bb2bf76881ace60ed1380292fdae01da02481d78b1->enter($__internal_c3930bd8086fb950006f42bb2bf76881ace60ed1380292fdae01da02481d78b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d30793fad566db96dde59c75101c9b8fc8fd408dbabf34c0d1a768fa3da0a2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30793fad566db96dde59c75101c9b8fc8fd408dbabf34c0d1a768fa3da0a2f6->enter($__internal_d30793fad566db96dde59c75101c9b8fc8fd408dbabf34c0d1a768fa3da0a2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "        ";
        
        $__internal_d30793fad566db96dde59c75101c9b8fc8fd408dbabf34c0d1a768fa3da0a2f6->leave($__internal_d30793fad566db96dde59c75101c9b8fc8fd408dbabf34c0d1a768fa3da0a2f6_prof);

        
        $__internal_c3930bd8086fb950006f42bb2bf76881ace60ed1380292fdae01da02481d78b1->leave($__internal_c3930bd8086fb950006f42bb2bf76881ace60ed1380292fdae01da02481d78b1_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d43c2e7cc85d8e8284147cef0a451c9a71cf1f9363e1374654df20cf15a2c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d43c2e7cc85d8e8284147cef0a451c9a71cf1f9363e1374654df20cf15a2c48->enter($__internal_4d43c2e7cc85d8e8284147cef0a451c9a71cf1f9363e1374654df20cf15a2c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_08355c5b8318938c70e983ad122c70a812b40ed939f1dcaac4ec6d9cfd7d93c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08355c5b8318938c70e983ad122c70a812b40ed939f1dcaac4ec6d9cfd7d93c1->enter($__internal_08355c5b8318938c70e983ad122c70a812b40ed939f1dcaac4ec6d9cfd7d93c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 67
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 68
            echo "        <script>
            function fetchNotificationCount() {
                fetch(
                    '";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification_unread");
            echo "',
                    {'credentials': 'include'}
                ).then(function (response) {
                    response.json().then(function (json) {
                        document.getElementById('notification-count').innerText = json.count;
                        setTimeout(fetchNotificationCount, 5000);
                    });
                }).catch(function (reason) {

                });
            }

            fetchNotificationCount();
        </script>
    ";
        }
        
        $__internal_08355c5b8318938c70e983ad122c70a812b40ed939f1dcaac4ec6d9cfd7d93c1->leave($__internal_08355c5b8318938c70e983ad122c70a812b40ed939f1dcaac4ec6d9cfd7d93c1_prof);

        
        $__internal_4d43c2e7cc85d8e8284147cef0a451c9a71cf1f9363e1374654df20cf15a2c48->leave($__internal_4d43c2e7cc85d8e8284147cef0a451c9a71cf1f9363e1374654df20cf15a2c48_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 71,  230 => 68,  228 => 67,  222 => 65,  213 => 64,  203 => 61,  194 => 60,  179 => 7,  170 => 6,  152 => 5,  140 => 87,  138 => 64,  134 => 62,  132 => 60,  124 => 54,  116 => 51,  112 => 49,  104 => 46,  97 => 42,  86 => 34,  82 => 33,  79 => 32,  77 => 31,  70 => 26,  63 => 22,  59 => 21,  56 => 20,  54 => 19,  48 => 16,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        <link rel=\"stylesheet\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    {% endblock %}
</head>
<body class=\"bg-light\">

<nav class=\"navbar navbar-dark navbar-expand-md sticky-top bg-dark p-0\">
    <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\"
       href=\"{{ path('micro_post_index') }}\">Micro Post App</a>
    <div class=\"w-100 order-1 order-md-0\">
        <ul class=\"navbar-nav px-3\">
            {% if is_granted('ROLE_USER') %}
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"{{ path('micro_post_add') }}\">
                        {{ 'Add new'|trans }}
                    </a>
                </li>
            {% endif %}
        </ul>
    </div>

    <div class=\"order-2 order-md-1\">
        <ul class=\"navbar-nav px-3\">
            {% if is_granted('ROLE_USER') %}
                <li class=\"nav-item text-nowrap border-right border-secondary\">
                    <a class=\"nav-link\" href=\"{{ path('notification_all') }}\">
                        {{ 'Notifications'|trans }}
                        <span class=\"badge badge-light\" id=\"notification-count\">
                            <i class=\"fa fa-circle fa-circle-o-notch fa-spin\"></i>
                        </span>
                    </a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"#\">{{ app.user.fullName }}</a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"{{ logout_path() }}\">{{ 'Sign out'|trans }}</a>
                </li>
            {% else %}
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"{{ path('security_login') }}\">{{ 'Sign in'|trans }}</a>
                </li>
            {% endif %}
        </ul>
    </div>
</nav>

<main role=\"main\" class=\"container\">
    <div class=\"my-3 p-3 bg-white rounded box-shadow\">
        {% block body %}
        {% endblock %}
    </div>
</main>
{% block javascripts %}
    <script src=\"{{ asset('build/js/app.js') }}\"></script>

    {% if is_granted('ROLE_USER') %}
        <script>
            function fetchNotificationCount() {
                fetch(
                    '{{ path('notification_unread') }}',
                    {'credentials': 'include'}
                ).then(function (response) {
                    response.json().then(function (json) {
                        document.getElementById('notification-count').innerText = json.count;
                        setTimeout(fetchNotificationCount, 5000);
                    });
                }).catch(function (reason) {

                });
            }

            fetchNotificationCount();
        </script>
    {% endif %}
{% endblock %}
</body>
</html>
", "base.html.twig", "/home/vagrant/symfony-01/templates/base.html.twig");
    }
}
