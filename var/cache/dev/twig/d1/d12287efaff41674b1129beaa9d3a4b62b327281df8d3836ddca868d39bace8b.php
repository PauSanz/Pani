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
        $__internal_3dab9421944c8c22ab69646e186d2eefef6715a75a01bad1872fcea78b24fcd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dab9421944c8c22ab69646e186d2eefef6715a75a01bad1872fcea78b24fcd4->enter($__internal_3dab9421944c8c22ab69646e186d2eefef6715a75a01bad1872fcea78b24fcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_82a6f98cce9a5b97b73f2f0387181bee1a8c45fa0a20e3eef4de99a9198269bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a6f98cce9a5b97b73f2f0387181bee1a8c45fa0a20e3eef4de99a9198269bd->enter($__internal_82a6f98cce9a5b97b73f2f0387181bee1a8c45fa0a20e3eef4de99a9198269bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3dab9421944c8c22ab69646e186d2eefef6715a75a01bad1872fcea78b24fcd4->leave($__internal_3dab9421944c8c22ab69646e186d2eefef6715a75a01bad1872fcea78b24fcd4_prof);

        
        $__internal_82a6f98cce9a5b97b73f2f0387181bee1a8c45fa0a20e3eef4de99a9198269bd->leave($__internal_82a6f98cce9a5b97b73f2f0387181bee1a8c45fa0a20e3eef4de99a9198269bd_prof);

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