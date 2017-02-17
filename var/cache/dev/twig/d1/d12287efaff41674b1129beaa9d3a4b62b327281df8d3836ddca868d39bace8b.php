<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7959ef5ed9cdd813f00e4daf8ae070426af728311cdf56baa99670839740c46d extends Twig_Template
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
        $__internal_5808116517ea6ca8279a24f3e3c643038ecc2514850fd42c07ec39cc155cefdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5808116517ea6ca8279a24f3e3c643038ecc2514850fd42c07ec39cc155cefdb->enter($__internal_5808116517ea6ca8279a24f3e3c643038ecc2514850fd42c07ec39cc155cefdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ba2de7eef14576569faa703ded93ec7afa5633ba582ba40e5fa50c7789e490e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2de7eef14576569faa703ded93ec7afa5633ba582ba40e5fa50c7789e490e6->enter($__internal_ba2de7eef14576569faa703ded93ec7afa5633ba582ba40e5fa50c7789e490e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5808116517ea6ca8279a24f3e3c643038ecc2514850fd42c07ec39cc155cefdb->leave($__internal_5808116517ea6ca8279a24f3e3c643038ecc2514850fd42c07ec39cc155cefdb_prof);

        
        $__internal_ba2de7eef14576569faa703ded93ec7afa5633ba582ba40e5fa50c7789e490e6->leave($__internal_ba2de7eef14576569faa703ded93ec7afa5633ba582ba40e5fa50c7789e490e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
