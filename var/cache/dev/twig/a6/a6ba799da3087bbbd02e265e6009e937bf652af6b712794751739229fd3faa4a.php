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
        $__internal_5818beddc5b54ed2e06f52169bcfa3fc597974736dc9d2e05ee6493fe8a19a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5818beddc5b54ed2e06f52169bcfa3fc597974736dc9d2e05ee6493fe8a19a58->enter($__internal_5818beddc5b54ed2e06f52169bcfa3fc597974736dc9d2e05ee6493fe8a19a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4f621ba94f10c4ba39854685a51c6e9279b18d34be20b26131f53964c8b7d6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f621ba94f10c4ba39854685a51c6e9279b18d34be20b26131f53964c8b7d6d0->enter($__internal_4f621ba94f10c4ba39854685a51c6e9279b18d34be20b26131f53964c8b7d6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5818beddc5b54ed2e06f52169bcfa3fc597974736dc9d2e05ee6493fe8a19a58->leave($__internal_5818beddc5b54ed2e06f52169bcfa3fc597974736dc9d2e05ee6493fe8a19a58_prof);

        
        $__internal_4f621ba94f10c4ba39854685a51c6e9279b18d34be20b26131f53964c8b7d6d0->leave($__internal_4f621ba94f10c4ba39854685a51c6e9279b18d34be20b26131f53964c8b7d6d0_prof);

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
