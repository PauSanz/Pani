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
        $__internal_7dbc7650489c2eab3c43784f31331d8a99941097904418bb4815705dfd13d122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dbc7650489c2eab3c43784f31331d8a99941097904418bb4815705dfd13d122->enter($__internal_7dbc7650489c2eab3c43784f31331d8a99941097904418bb4815705dfd13d122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c8ca1b2a55610ec2b47ac36330e49d8b8ab0d1e941d0b2f564598db855e10d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ca1b2a55610ec2b47ac36330e49d8b8ab0d1e941d0b2f564598db855e10d4f->enter($__internal_c8ca1b2a55610ec2b47ac36330e49d8b8ab0d1e941d0b2f564598db855e10d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7dbc7650489c2eab3c43784f31331d8a99941097904418bb4815705dfd13d122->leave($__internal_7dbc7650489c2eab3c43784f31331d8a99941097904418bb4815705dfd13d122_prof);

        
        $__internal_c8ca1b2a55610ec2b47ac36330e49d8b8ab0d1e941d0b2f564598db855e10d4f->leave($__internal_c8ca1b2a55610ec2b47ac36330e49d8b8ab0d1e941d0b2f564598db855e10d4f_prof);

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
