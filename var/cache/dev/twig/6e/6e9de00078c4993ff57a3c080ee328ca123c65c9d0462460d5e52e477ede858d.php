<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c6b29fdb34b2ae741a02c62ef09a0660ef07dc2dc26ca52bccb62100c7d7df5b extends Twig_Template
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
        $__internal_b121f6690535da106c5132a809d0e9da20f8c746553d07bc46d4f0d6d70b5310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b121f6690535da106c5132a809d0e9da20f8c746553d07bc46d4f0d6d70b5310->enter($__internal_b121f6690535da106c5132a809d0e9da20f8c746553d07bc46d4f0d6d70b5310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5b7a62d4b1ad661c673d1a87ea93b89f65734392c65e2a821e72967d644cc888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7a62d4b1ad661c673d1a87ea93b89f65734392c65e2a821e72967d644cc888->enter($__internal_5b7a62d4b1ad661c673d1a87ea93b89f65734392c65e2a821e72967d644cc888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b121f6690535da106c5132a809d0e9da20f8c746553d07bc46d4f0d6d70b5310->leave($__internal_b121f6690535da106c5132a809d0e9da20f8c746553d07bc46d4f0d6d70b5310_prof);

        
        $__internal_5b7a62d4b1ad661c673d1a87ea93b89f65734392c65e2a821e72967d644cc888->leave($__internal_5b7a62d4b1ad661c673d1a87ea93b89f65734392c65e2a821e72967d644cc888_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
