<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_841de668e0710b00073832b496127d5bfb678ba1ef750def646f3b188f7f556f extends Twig_Template
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
        $__internal_d70a228f3202ea2b3969dccd15ed086848a34ce05ea9afc4da7b4577e5605023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70a228f3202ea2b3969dccd15ed086848a34ce05ea9afc4da7b4577e5605023->enter($__internal_d70a228f3202ea2b3969dccd15ed086848a34ce05ea9afc4da7b4577e5605023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_77dae43f57947a710fc5bc858cbb8d7a70ad399a153293e8fc0569f7a0b72bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77dae43f57947a710fc5bc858cbb8d7a70ad399a153293e8fc0569f7a0b72bde->enter($__internal_77dae43f57947a710fc5bc858cbb8d7a70ad399a153293e8fc0569f7a0b72bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d70a228f3202ea2b3969dccd15ed086848a34ce05ea9afc4da7b4577e5605023->leave($__internal_d70a228f3202ea2b3969dccd15ed086848a34ce05ea9afc4da7b4577e5605023_prof);

        
        $__internal_77dae43f57947a710fc5bc858cbb8d7a70ad399a153293e8fc0569f7a0b72bde->leave($__internal_77dae43f57947a710fc5bc858cbb8d7a70ad399a153293e8fc0569f7a0b72bde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
