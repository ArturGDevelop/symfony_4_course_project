<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e116fe974d49874065d3281f8060678adb4202e46b12e737d8d97ad59dae1f33 extends Twig_Template
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
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_enctype.html.php", "/home/vagrant/symfony-01/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
