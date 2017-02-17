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
        $__internal_56363826725b647f20cff4776166b774916795cddc9382f9f40813e70b176f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56363826725b647f20cff4776166b774916795cddc9382f9f40813e70b176f83->enter($__internal_56363826725b647f20cff4776166b774916795cddc9382f9f40813e70b176f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a53c36421796ad525c45a124ebc97a7375847772147f20488c44525df89119e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53c36421796ad525c45a124ebc97a7375847772147f20488c44525df89119e4->enter($__internal_a53c36421796ad525c45a124ebc97a7375847772147f20488c44525df89119e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_56363826725b647f20cff4776166b774916795cddc9382f9f40813e70b176f83->leave($__internal_56363826725b647f20cff4776166b774916795cddc9382f9f40813e70b176f83_prof);

        
        $__internal_a53c36421796ad525c45a124ebc97a7375847772147f20488c44525df89119e4->leave($__internal_a53c36421796ad525c45a124ebc97a7375847772147f20488c44525df89119e4_prof);

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
