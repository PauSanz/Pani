<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2802bf873dfcf0b291c23335fc1509bada7d758941c7223e860f128766bc7f78 extends Twig_Template
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
        $__internal_7d19ecf59f691f833ca8e73de47bd47c8c34966f066b2b83a88d8c432e209019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d19ecf59f691f833ca8e73de47bd47c8c34966f066b2b83a88d8c432e209019->enter($__internal_7d19ecf59f691f833ca8e73de47bd47c8c34966f066b2b83a88d8c432e209019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c5994bd4831e545dd61d588a75ec444c466d2f97d14ccb851e63c37ae3c53e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5994bd4831e545dd61d588a75ec444c466d2f97d14ccb851e63c37ae3c53e98->enter($__internal_c5994bd4831e545dd61d588a75ec444c466d2f97d14ccb851e63c37ae3c53e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7d19ecf59f691f833ca8e73de47bd47c8c34966f066b2b83a88d8c432e209019->leave($__internal_7d19ecf59f691f833ca8e73de47bd47c8c34966f066b2b83a88d8c432e209019_prof);

        
        $__internal_c5994bd4831e545dd61d588a75ec444c466d2f97d14ccb851e63c37ae3c53e98->leave($__internal_c5994bd4831e545dd61d588a75ec444c466d2f97d14ccb851e63c37ae3c53e98_prof);

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
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
