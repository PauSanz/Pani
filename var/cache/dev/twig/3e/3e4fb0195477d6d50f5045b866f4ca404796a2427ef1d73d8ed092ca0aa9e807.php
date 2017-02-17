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
        $__internal_e1b23e5aab3c4399ff3f664ccf7bd8beb853af7b8967d1b1e9605fc86aa08502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b23e5aab3c4399ff3f664ccf7bd8beb853af7b8967d1b1e9605fc86aa08502->enter($__internal_e1b23e5aab3c4399ff3f664ccf7bd8beb853af7b8967d1b1e9605fc86aa08502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_30821458f7664530a2005c0c8a0d7d09a53e2a36ee8a574333808da27f9415ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30821458f7664530a2005c0c8a0d7d09a53e2a36ee8a574333808da27f9415ef->enter($__internal_30821458f7664530a2005c0c8a0d7d09a53e2a36ee8a574333808da27f9415ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e1b23e5aab3c4399ff3f664ccf7bd8beb853af7b8967d1b1e9605fc86aa08502->leave($__internal_e1b23e5aab3c4399ff3f664ccf7bd8beb853af7b8967d1b1e9605fc86aa08502_prof);

        
        $__internal_30821458f7664530a2005c0c8a0d7d09a53e2a36ee8a574333808da27f9415ef->leave($__internal_30821458f7664530a2005c0c8a0d7d09a53e2a36ee8a574333808da27f9415ef_prof);

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
