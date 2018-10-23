<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7d475f51c61c84e0770d278f16637f47692a0765e4c3d7d1be9e32ee105ef97e extends Twig_Template
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
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/collection_widget.html.php", "/home/vagrant/symfony-01/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
