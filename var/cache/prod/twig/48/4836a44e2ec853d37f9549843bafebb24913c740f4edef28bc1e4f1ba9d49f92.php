<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2e4cf7682ca4eec1adf6b0003c43000ff21c6585a1ea5a4f584990ad5664f310 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/submit_widget.html.php", "/home/vagrant/symfony-01/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
