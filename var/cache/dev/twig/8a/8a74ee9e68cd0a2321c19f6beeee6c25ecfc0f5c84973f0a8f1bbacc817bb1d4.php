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
        $__internal_3338ab5b08725c76524214f83a7e36502351690e31ce9e41242680e526ffbeeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3338ab5b08725c76524214f83a7e36502351690e31ce9e41242680e526ffbeeb->enter($__internal_3338ab5b08725c76524214f83a7e36502351690e31ce9e41242680e526ffbeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_eda02fffdaf7912fd0a53a053ffb993895205fda1c73821ef5e00f5d1c113542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda02fffdaf7912fd0a53a053ffb993895205fda1c73821ef5e00f5d1c113542->enter($__internal_eda02fffdaf7912fd0a53a053ffb993895205fda1c73821ef5e00f5d1c113542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3338ab5b08725c76524214f83a7e36502351690e31ce9e41242680e526ffbeeb->leave($__internal_3338ab5b08725c76524214f83a7e36502351690e31ce9e41242680e526ffbeeb_prof);

        
        $__internal_eda02fffdaf7912fd0a53a053ffb993895205fda1c73821ef5e00f5d1c113542->leave($__internal_eda02fffdaf7912fd0a53a053ffb993895205fda1c73821ef5e00f5d1c113542_prof);

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
