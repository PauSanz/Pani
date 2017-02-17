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
        $__internal_11947c16a0a33e0fed800bab155167616217d4fe0b42a8bedb6085574459c7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11947c16a0a33e0fed800bab155167616217d4fe0b42a8bedb6085574459c7ea->enter($__internal_11947c16a0a33e0fed800bab155167616217d4fe0b42a8bedb6085574459c7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_cc3842dfb1729da284432c19c40cf1c3f2e2108796f503850908317a9de810b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3842dfb1729da284432c19c40cf1c3f2e2108796f503850908317a9de810b4->enter($__internal_cc3842dfb1729da284432c19c40cf1c3f2e2108796f503850908317a9de810b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_11947c16a0a33e0fed800bab155167616217d4fe0b42a8bedb6085574459c7ea->leave($__internal_11947c16a0a33e0fed800bab155167616217d4fe0b42a8bedb6085574459c7ea_prof);

        
        $__internal_cc3842dfb1729da284432c19c40cf1c3f2e2108796f503850908317a9de810b4->leave($__internal_cc3842dfb1729da284432c19c40cf1c3f2e2108796f503850908317a9de810b4_prof);

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
