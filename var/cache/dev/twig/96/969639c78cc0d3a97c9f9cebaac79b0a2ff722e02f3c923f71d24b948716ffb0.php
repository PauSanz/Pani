<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_81c1a5d396cec14460da97f1994277ab6492e5dca7b9ba87c8ce5a01022073b2 extends Twig_Template
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
        $__internal_f601fe07fa2bbdf335867d3b14e143225458e20cd3f8e59578830878b4a78d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f601fe07fa2bbdf335867d3b14e143225458e20cd3f8e59578830878b4a78d02->enter($__internal_f601fe07fa2bbdf335867d3b14e143225458e20cd3f8e59578830878b4a78d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6b66931589699dbb324bc45f75998029c12c3daaa5e7771d18718dd1bc66e7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b66931589699dbb324bc45f75998029c12c3daaa5e7771d18718dd1bc66e7f1->enter($__internal_6b66931589699dbb324bc45f75998029c12c3daaa5e7771d18718dd1bc66e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f601fe07fa2bbdf335867d3b14e143225458e20cd3f8e59578830878b4a78d02->leave($__internal_f601fe07fa2bbdf335867d3b14e143225458e20cd3f8e59578830878b4a78d02_prof);

        
        $__internal_6b66931589699dbb324bc45f75998029c12c3daaa5e7771d18718dd1bc66e7f1->leave($__internal_6b66931589699dbb324bc45f75998029c12c3daaa5e7771d18718dd1bc66e7f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
