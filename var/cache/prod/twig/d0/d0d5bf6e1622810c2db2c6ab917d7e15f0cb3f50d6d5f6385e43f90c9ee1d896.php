<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_cf3a116beb650bada873ab2ef34033e1540e0a41d7d587427afc27c12fe3d48a extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/percent_widget.html.php", "/home/vagrant/symfony-01/vendor/symfony/framework-bundle/Resources/views/Form/percent_widget.html.php");
    }
}
