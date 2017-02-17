<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ba4ae6009d75e433a538813d37b22ae62c1aadf7f2453b7ba4419ab24c13d67f extends Twig_Template
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
        $__internal_5928dc30c5be7ff33d2103db7fb71016c161097d620f5b5046a71d9e9d8592b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5928dc30c5be7ff33d2103db7fb71016c161097d620f5b5046a71d9e9d8592b0->enter($__internal_5928dc30c5be7ff33d2103db7fb71016c161097d620f5b5046a71d9e9d8592b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_524e6a7c8760936d9e46b98518f5761fdaf980f6cc65585c434218af1270d2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524e6a7c8760936d9e46b98518f5761fdaf980f6cc65585c434218af1270d2ca->enter($__internal_524e6a7c8760936d9e46b98518f5761fdaf980f6cc65585c434218af1270d2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5928dc30c5be7ff33d2103db7fb71016c161097d620f5b5046a71d9e9d8592b0->leave($__internal_5928dc30c5be7ff33d2103db7fb71016c161097d620f5b5046a71d9e9d8592b0_prof);

        
        $__internal_524e6a7c8760936d9e46b98518f5761fdaf980f6cc65585c434218af1270d2ca->leave($__internal_524e6a7c8760936d9e46b98518f5761fdaf980f6cc65585c434218af1270d2ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
