<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_899395eb8f93ff7f2bbf1989f52b4496c16e1665d2242bcf11bf7a06ecbaa275 extends Twig_Template
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
        $__internal_b2090e2168678361afb2e2d097954dc682bb9c693cc5e16dec94f72e11fc4b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2090e2168678361afb2e2d097954dc682bb9c693cc5e16dec94f72e11fc4b00->enter($__internal_b2090e2168678361afb2e2d097954dc682bb9c693cc5e16dec94f72e11fc4b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6b59610f3caaa44332a9e8095a7eda1f49365a28880905c15adba06261cfbc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b59610f3caaa44332a9e8095a7eda1f49365a28880905c15adba06261cfbc4e->enter($__internal_6b59610f3caaa44332a9e8095a7eda1f49365a28880905c15adba06261cfbc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b2090e2168678361afb2e2d097954dc682bb9c693cc5e16dec94f72e11fc4b00->leave($__internal_b2090e2168678361afb2e2d097954dc682bb9c693cc5e16dec94f72e11fc4b00_prof);

        
        $__internal_6b59610f3caaa44332a9e8095a7eda1f49365a28880905c15adba06261cfbc4e->leave($__internal_6b59610f3caaa44332a9e8095a7eda1f49365a28880905c15adba06261cfbc4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
