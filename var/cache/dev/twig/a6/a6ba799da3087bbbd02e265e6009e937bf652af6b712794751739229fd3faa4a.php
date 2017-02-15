<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1ed83546a1edf4d3ec876e659bb94ef614f3c83aba763ca9e506bac27e40f94 extends Twig_Template
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
        $__internal_d53fd982b1a3f66eee4b14fa59a8e458045274879dd670b02084a81924cad6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53fd982b1a3f66eee4b14fa59a8e458045274879dd670b02084a81924cad6a6->enter($__internal_d53fd982b1a3f66eee4b14fa59a8e458045274879dd670b02084a81924cad6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_773a451a1d8ae45666b39f3d66e32ea6fad2b66c6aa86ee5a717d3422398c602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773a451a1d8ae45666b39f3d66e32ea6fad2b66c6aa86ee5a717d3422398c602->enter($__internal_773a451a1d8ae45666b39f3d66e32ea6fad2b66c6aa86ee5a717d3422398c602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d53fd982b1a3f66eee4b14fa59a8e458045274879dd670b02084a81924cad6a6->leave($__internal_d53fd982b1a3f66eee4b14fa59a8e458045274879dd670b02084a81924cad6a6_prof);

        
        $__internal_773a451a1d8ae45666b39f3d66e32ea6fad2b66c6aa86ee5a717d3422398c602->leave($__internal_773a451a1d8ae45666b39f3d66e32ea6fad2b66c6aa86ee5a717d3422398c602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
