<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_58b5a44e49cb3ec1fecf58dbb1fa44f1b3ccc462377450ef352c139ea47db7cc extends Twig_Template
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
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/button_row.html.php", "/home/vagrant/symfony-01/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
