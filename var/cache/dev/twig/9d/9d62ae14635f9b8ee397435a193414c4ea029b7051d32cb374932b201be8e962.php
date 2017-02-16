<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_54afc722913edc0b9b10153ad5d267b89b6f693962210995e8e8f65daac51f3a extends Twig_Template
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
        $__internal_8b44f93c83d16bb1f33887d26c17bf79f7967974ff6d58dcb5c7d734a8385929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b44f93c83d16bb1f33887d26c17bf79f7967974ff6d58dcb5c7d734a8385929->enter($__internal_8b44f93c83d16bb1f33887d26c17bf79f7967974ff6d58dcb5c7d734a8385929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6b7f920fb9e51c0f648f002a31735edc09fbfd9554fa3aaceecdc773adeb4423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7f920fb9e51c0f648f002a31735edc09fbfd9554fa3aaceecdc773adeb4423->enter($__internal_6b7f920fb9e51c0f648f002a31735edc09fbfd9554fa3aaceecdc773adeb4423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8b44f93c83d16bb1f33887d26c17bf79f7967974ff6d58dcb5c7d734a8385929->leave($__internal_8b44f93c83d16bb1f33887d26c17bf79f7967974ff6d58dcb5c7d734a8385929_prof);

        
        $__internal_6b7f920fb9e51c0f648f002a31735edc09fbfd9554fa3aaceecdc773adeb4423->leave($__internal_6b7f920fb9e51c0f648f002a31735edc09fbfd9554fa3aaceecdc773adeb4423_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
