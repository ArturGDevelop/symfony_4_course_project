<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_2c35e3ae9317ac520a163e415ed4b78105f5bf6c5f0853289e0b59b33a0fe862 extends Twig_Template
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
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/widget_container_attributes.html.php", "/home/vagrant/symfony-01/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
