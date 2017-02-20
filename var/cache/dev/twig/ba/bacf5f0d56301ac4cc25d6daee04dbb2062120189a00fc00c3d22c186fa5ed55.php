<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f36809a933f07499a17a19595c53b10aa963ae08aa007722828a211328d0e041 extends Twig_Template
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
        $__internal_0111302879021ff190fbef89f76ebf50c53d342a2060d80a1cef95c999be69c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0111302879021ff190fbef89f76ebf50c53d342a2060d80a1cef95c999be69c9->enter($__internal_0111302879021ff190fbef89f76ebf50c53d342a2060d80a1cef95c999be69c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a6bb0a1014559aedf575f92b0d0366f77adceb6a196e8af21134abcdae2392c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bb0a1014559aedf575f92b0d0366f77adceb6a196e8af21134abcdae2392c9->enter($__internal_a6bb0a1014559aedf575f92b0d0366f77adceb6a196e8af21134abcdae2392c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0111302879021ff190fbef89f76ebf50c53d342a2060d80a1cef95c999be69c9->leave($__internal_0111302879021ff190fbef89f76ebf50c53d342a2060d80a1cef95c999be69c9_prof);

        
        $__internal_a6bb0a1014559aedf575f92b0d0366f77adceb6a196e8af21134abcdae2392c9->leave($__internal_a6bb0a1014559aedf575f92b0d0366f77adceb6a196e8af21134abcdae2392c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
