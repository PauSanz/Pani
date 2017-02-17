<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_841de668e0710b00073832b496127d5bfb678ba1ef750def646f3b188f7f556f extends Twig_Template
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
        $__internal_7ced0f9720b210f1c725c5142adfd6492792fa6f5cc084165893f003a4ce4f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ced0f9720b210f1c725c5142adfd6492792fa6f5cc084165893f003a4ce4f07->enter($__internal_7ced0f9720b210f1c725c5142adfd6492792fa6f5cc084165893f003a4ce4f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e5221c8ea0a6a138a5929f12a9174d4e49875df1e9095609e1f7d782e2c619c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5221c8ea0a6a138a5929f12a9174d4e49875df1e9095609e1f7d782e2c619c6->enter($__internal_e5221c8ea0a6a138a5929f12a9174d4e49875df1e9095609e1f7d782e2c619c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7ced0f9720b210f1c725c5142adfd6492792fa6f5cc084165893f003a4ce4f07->leave($__internal_7ced0f9720b210f1c725c5142adfd6492792fa6f5cc084165893f003a4ce4f07_prof);

        
        $__internal_e5221c8ea0a6a138a5929f12a9174d4e49875df1e9095609e1f7d782e2c619c6->leave($__internal_e5221c8ea0a6a138a5929f12a9174d4e49875df1e9095609e1f7d782e2c619c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
