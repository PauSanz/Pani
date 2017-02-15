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
        $__internal_e24a6f4dde8325938597b67931470ca859e8022f0156fd6306c58693e9f3200e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24a6f4dde8325938597b67931470ca859e8022f0156fd6306c58693e9f3200e->enter($__internal_e24a6f4dde8325938597b67931470ca859e8022f0156fd6306c58693e9f3200e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1399e87044b29eb7b4a4f955a4badd9abb02b304e497df4d56cc63a44e58ff4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1399e87044b29eb7b4a4f955a4badd9abb02b304e497df4d56cc63a44e58ff4c->enter($__internal_1399e87044b29eb7b4a4f955a4badd9abb02b304e497df4d56cc63a44e58ff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e24a6f4dde8325938597b67931470ca859e8022f0156fd6306c58693e9f3200e->leave($__internal_e24a6f4dde8325938597b67931470ca859e8022f0156fd6306c58693e9f3200e_prof);

        
        $__internal_1399e87044b29eb7b4a4f955a4badd9abb02b304e497df4d56cc63a44e58ff4c->leave($__internal_1399e87044b29eb7b4a4f955a4badd9abb02b304e497df4d56cc63a44e58ff4c_prof);

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
