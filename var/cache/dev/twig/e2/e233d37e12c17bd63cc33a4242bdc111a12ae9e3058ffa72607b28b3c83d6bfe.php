<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4200d37ffa52f13af3d7ac4d14c8c6961ae98f0e2e8954cb8adc54233b648d9f extends Twig_Template
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
        $__internal_5bedfec0b62c2a8d87256620297753a8bb861f52e913d7b7294801890ab2f517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bedfec0b62c2a8d87256620297753a8bb861f52e913d7b7294801890ab2f517->enter($__internal_5bedfec0b62c2a8d87256620297753a8bb861f52e913d7b7294801890ab2f517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_16d8c0f0d15eb8d40e3b8cf36cfb41be787de7bc90aa7cf308df7a9618e07d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d8c0f0d15eb8d40e3b8cf36cfb41be787de7bc90aa7cf308df7a9618e07d9b->enter($__internal_16d8c0f0d15eb8d40e3b8cf36cfb41be787de7bc90aa7cf308df7a9618e07d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5bedfec0b62c2a8d87256620297753a8bb861f52e913d7b7294801890ab2f517->leave($__internal_5bedfec0b62c2a8d87256620297753a8bb861f52e913d7b7294801890ab2f517_prof);

        
        $__internal_16d8c0f0d15eb8d40e3b8cf36cfb41be787de7bc90aa7cf308df7a9618e07d9b->leave($__internal_16d8c0f0d15eb8d40e3b8cf36cfb41be787de7bc90aa7cf308df7a9618e07d9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
