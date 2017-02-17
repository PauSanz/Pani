<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9bd17346f1151846329ee9bedb764f130a7eb79eb82f02ad955b2424b15b926c extends Twig_Template
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
        $__internal_88b5a381e138e3b97d476d26d9a3db719b9a14a250f2a8046541e9a17ba7e758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b5a381e138e3b97d476d26d9a3db719b9a14a250f2a8046541e9a17ba7e758->enter($__internal_88b5a381e138e3b97d476d26d9a3db719b9a14a250f2a8046541e9a17ba7e758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_502d87297c5ab1491749eea4a413d082ce3ebb42e7981fb9bc705eab74e07af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502d87297c5ab1491749eea4a413d082ce3ebb42e7981fb9bc705eab74e07af7->enter($__internal_502d87297c5ab1491749eea4a413d082ce3ebb42e7981fb9bc705eab74e07af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_88b5a381e138e3b97d476d26d9a3db719b9a14a250f2a8046541e9a17ba7e758->leave($__internal_88b5a381e138e3b97d476d26d9a3db719b9a14a250f2a8046541e9a17ba7e758_prof);

        
        $__internal_502d87297c5ab1491749eea4a413d082ce3ebb42e7981fb9bc705eab74e07af7->leave($__internal_502d87297c5ab1491749eea4a413d082ce3ebb42e7981fb9bc705eab74e07af7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
