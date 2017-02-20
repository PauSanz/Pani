<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2fbcc80903a889934e317688aaa3542d6cbe402c5fabaef50deacacf2f79db7f extends Twig_Template
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
        $__internal_c210394067f76c8fef5fb9bd4e19f3ad4447d290b347166fdeabe9968b363568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c210394067f76c8fef5fb9bd4e19f3ad4447d290b347166fdeabe9968b363568->enter($__internal_c210394067f76c8fef5fb9bd4e19f3ad4447d290b347166fdeabe9968b363568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_326f5dedd06555d6c2ae93fc2b8cb46944c18fce93315ba8aca0e2fdc8d63ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326f5dedd06555d6c2ae93fc2b8cb46944c18fce93315ba8aca0e2fdc8d63ecb->enter($__internal_326f5dedd06555d6c2ae93fc2b8cb46944c18fce93315ba8aca0e2fdc8d63ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c210394067f76c8fef5fb9bd4e19f3ad4447d290b347166fdeabe9968b363568->leave($__internal_c210394067f76c8fef5fb9bd4e19f3ad4447d290b347166fdeabe9968b363568_prof);

        
        $__internal_326f5dedd06555d6c2ae93fc2b8cb46944c18fce93315ba8aca0e2fdc8d63ecb->leave($__internal_326f5dedd06555d6c2ae93fc2b8cb46944c18fce93315ba8aca0e2fdc8d63ecb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
