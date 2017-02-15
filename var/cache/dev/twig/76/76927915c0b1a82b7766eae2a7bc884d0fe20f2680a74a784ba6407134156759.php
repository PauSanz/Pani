<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cb5cd4d8d267c9457af6ab3bf5e5fc99cb03bf69306ba2d6d801ef58f77f26ba extends Twig_Template
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
        $__internal_8300df6dda3c0b368c3cdf082351ce187862563d24cb26d3f460daa8f140412c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8300df6dda3c0b368c3cdf082351ce187862563d24cb26d3f460daa8f140412c->enter($__internal_8300df6dda3c0b368c3cdf082351ce187862563d24cb26d3f460daa8f140412c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_dbf91d40c94eefb65bca9fd310ec38d46a8f1181a850804c4ce91a57f97d8db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf91d40c94eefb65bca9fd310ec38d46a8f1181a850804c4ce91a57f97d8db1->enter($__internal_dbf91d40c94eefb65bca9fd310ec38d46a8f1181a850804c4ce91a57f97d8db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8300df6dda3c0b368c3cdf082351ce187862563d24cb26d3f460daa8f140412c->leave($__internal_8300df6dda3c0b368c3cdf082351ce187862563d24cb26d3f460daa8f140412c_prof);

        
        $__internal_dbf91d40c94eefb65bca9fd310ec38d46a8f1181a850804c4ce91a57f97d8db1->leave($__internal_dbf91d40c94eefb65bca9fd310ec38d46a8f1181a850804c4ce91a57f97d8db1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
