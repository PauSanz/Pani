<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_03e1df71ce0b6b49bc6927a38f198ba44bb38c50e09e9b103aa8ee49de9a3883 extends Twig_Template
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
        $__internal_1d0e73b3565f96caabff89b0ffb6ec96b1b60371fad41a616ece69cf3694064e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0e73b3565f96caabff89b0ffb6ec96b1b60371fad41a616ece69cf3694064e->enter($__internal_1d0e73b3565f96caabff89b0ffb6ec96b1b60371fad41a616ece69cf3694064e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_62f3227f31da97eef900f41c253cc30c308519a325720af7d3c6e48ebe050c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f3227f31da97eef900f41c253cc30c308519a325720af7d3c6e48ebe050c26->enter($__internal_62f3227f31da97eef900f41c253cc30c308519a325720af7d3c6e48ebe050c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1d0e73b3565f96caabff89b0ffb6ec96b1b60371fad41a616ece69cf3694064e->leave($__internal_1d0e73b3565f96caabff89b0ffb6ec96b1b60371fad41a616ece69cf3694064e_prof);

        
        $__internal_62f3227f31da97eef900f41c253cc30c308519a325720af7d3c6e48ebe050c26->leave($__internal_62f3227f31da97eef900f41c253cc30c308519a325720af7d3c6e48ebe050c26_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
