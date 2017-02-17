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
        $__internal_e04a0f6c69a05616dd2218ffc176caac077ec40aa203410f3ccd05b302bbf450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04a0f6c69a05616dd2218ffc176caac077ec40aa203410f3ccd05b302bbf450->enter($__internal_e04a0f6c69a05616dd2218ffc176caac077ec40aa203410f3ccd05b302bbf450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b7351b959d2c812277ae9e5731845b4b74ec56c681a794e33a7ffc7ab6e61a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7351b959d2c812277ae9e5731845b4b74ec56c681a794e33a7ffc7ab6e61a9f->enter($__internal_b7351b959d2c812277ae9e5731845b4b74ec56c681a794e33a7ffc7ab6e61a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e04a0f6c69a05616dd2218ffc176caac077ec40aa203410f3ccd05b302bbf450->leave($__internal_e04a0f6c69a05616dd2218ffc176caac077ec40aa203410f3ccd05b302bbf450_prof);

        
        $__internal_b7351b959d2c812277ae9e5731845b4b74ec56c681a794e33a7ffc7ab6e61a9f->leave($__internal_b7351b959d2c812277ae9e5731845b4b74ec56c681a794e33a7ffc7ab6e61a9f_prof);

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
