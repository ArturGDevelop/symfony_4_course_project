<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_14aba53836b0ece40a6f8bb0de4556068029f0f2db9ed5dee80f8a0b4d5e890b extends Twig_Template
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
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form.html.php", "/home/vagrant/symfony-01/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
