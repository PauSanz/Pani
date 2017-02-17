<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_438f95d2b8c6ae583edf5be0a0d7ac7aa708a2d782ceefea0f61bfe756daeb06 extends Twig_Template
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
        $__internal_971a86afd46c0139fb51c9027f2f95a08eba1055c57f0f5361e0dec49c1c53ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971a86afd46c0139fb51c9027f2f95a08eba1055c57f0f5361e0dec49c1c53ae->enter($__internal_971a86afd46c0139fb51c9027f2f95a08eba1055c57f0f5361e0dec49c1c53ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_9d5276d2d28d843b575dddd3a1d93bc8801ed1f22a82538a358ccca22b8d52c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5276d2d28d843b575dddd3a1d93bc8801ed1f22a82538a358ccca22b8d52c6->enter($__internal_9d5276d2d28d843b575dddd3a1d93bc8801ed1f22a82538a358ccca22b8d52c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_971a86afd46c0139fb51c9027f2f95a08eba1055c57f0f5361e0dec49c1c53ae->leave($__internal_971a86afd46c0139fb51c9027f2f95a08eba1055c57f0f5361e0dec49c1c53ae_prof);

        
        $__internal_9d5276d2d28d843b575dddd3a1d93bc8801ed1f22a82538a358ccca22b8d52c6->leave($__internal_9d5276d2d28d843b575dddd3a1d93bc8801ed1f22a82538a358ccca22b8d52c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
