<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c4bd20018e0fbad59f3b7de5d1f00ccec1b0d56d952fd169bf466198bb251fef extends Twig_Template
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
        $__internal_e8ba22587ff6d8ccaa6fd441572fd427d521299f9618f40a2501864f80f84638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ba22587ff6d8ccaa6fd441572fd427d521299f9618f40a2501864f80f84638->enter($__internal_e8ba22587ff6d8ccaa6fd441572fd427d521299f9618f40a2501864f80f84638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_32d62eafd4fa0fa2bec849fe097338280ba51e78eb7daf040871ce6f16b3cf86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d62eafd4fa0fa2bec849fe097338280ba51e78eb7daf040871ce6f16b3cf86->enter($__internal_32d62eafd4fa0fa2bec849fe097338280ba51e78eb7daf040871ce6f16b3cf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e8ba22587ff6d8ccaa6fd441572fd427d521299f9618f40a2501864f80f84638->leave($__internal_e8ba22587ff6d8ccaa6fd441572fd427d521299f9618f40a2501864f80f84638_prof);

        
        $__internal_32d62eafd4fa0fa2bec849fe097338280ba51e78eb7daf040871ce6f16b3cf86->leave($__internal_32d62eafd4fa0fa2bec849fe097338280ba51e78eb7daf040871ce6f16b3cf86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
