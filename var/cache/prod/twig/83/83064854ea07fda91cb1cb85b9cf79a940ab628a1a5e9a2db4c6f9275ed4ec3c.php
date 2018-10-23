<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_96b877a2eab8336b09033bc8fb016f6680766446cc36514fab3f1fdb515603bc extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/reset_widget.html.php", "/home/vagrant/symfony-01/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
