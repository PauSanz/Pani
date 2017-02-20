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
        $__internal_aa6f344b65c441e9d6afb422cd2d29a312fcc5778cc9226c166cd3702f1ce4b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6f344b65c441e9d6afb422cd2d29a312fcc5778cc9226c166cd3702f1ce4b0->enter($__internal_aa6f344b65c441e9d6afb422cd2d29a312fcc5778cc9226c166cd3702f1ce4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_10472e93810663f4928feda65960a3eaf02401cbd92b92ac09fdd6b84a520f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10472e93810663f4928feda65960a3eaf02401cbd92b92ac09fdd6b84a520f6c->enter($__internal_10472e93810663f4928feda65960a3eaf02401cbd92b92ac09fdd6b84a520f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_aa6f344b65c441e9d6afb422cd2d29a312fcc5778cc9226c166cd3702f1ce4b0->leave($__internal_aa6f344b65c441e9d6afb422cd2d29a312fcc5778cc9226c166cd3702f1ce4b0_prof);

        
        $__internal_10472e93810663f4928feda65960a3eaf02401cbd92b92ac09fdd6b84a520f6c->leave($__internal_10472e93810663f4928feda65960a3eaf02401cbd92b92ac09fdd6b84a520f6c_prof);

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
