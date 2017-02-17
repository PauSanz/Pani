<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e94e33310ae95e5c63f6ffc34d64de60e01a04381f8bbda4ddefed83ddd73229 extends Twig_Template
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
        $__internal_41ea714244e16b6e640b17cda2a7e8aa2e90200751dad69892b0b5ed8900e67b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ea714244e16b6e640b17cda2a7e8aa2e90200751dad69892b0b5ed8900e67b->enter($__internal_41ea714244e16b6e640b17cda2a7e8aa2e90200751dad69892b0b5ed8900e67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c8f890add23aa0b508392323b8956f9007ff7f39765b528bb5b426841f122cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f890add23aa0b508392323b8956f9007ff7f39765b528bb5b426841f122cc8->enter($__internal_c8f890add23aa0b508392323b8956f9007ff7f39765b528bb5b426841f122cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_41ea714244e16b6e640b17cda2a7e8aa2e90200751dad69892b0b5ed8900e67b->leave($__internal_41ea714244e16b6e640b17cda2a7e8aa2e90200751dad69892b0b5ed8900e67b_prof);

        
        $__internal_c8f890add23aa0b508392323b8956f9007ff7f39765b528bb5b426841f122cc8->leave($__internal_c8f890add23aa0b508392323b8956f9007ff7f39765b528bb5b426841f122cc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
