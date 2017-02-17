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
        $__internal_15a7f5d31202bf4514ce18a65e16ab4c2d83fb92ce2164fe5016d214867e2039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a7f5d31202bf4514ce18a65e16ab4c2d83fb92ce2164fe5016d214867e2039->enter($__internal_15a7f5d31202bf4514ce18a65e16ab4c2d83fb92ce2164fe5016d214867e2039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ab74ea1bc722b9ce43e7d7ae609f369baa1d76e32edc084822cefa3a5f3d64ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab74ea1bc722b9ce43e7d7ae609f369baa1d76e32edc084822cefa3a5f3d64ef->enter($__internal_ab74ea1bc722b9ce43e7d7ae609f369baa1d76e32edc084822cefa3a5f3d64ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_15a7f5d31202bf4514ce18a65e16ab4c2d83fb92ce2164fe5016d214867e2039->leave($__internal_15a7f5d31202bf4514ce18a65e16ab4c2d83fb92ce2164fe5016d214867e2039_prof);

        
        $__internal_ab74ea1bc722b9ce43e7d7ae609f369baa1d76e32edc084822cefa3a5f3d64ef->leave($__internal_ab74ea1bc722b9ce43e7d7ae609f369baa1d76e32edc084822cefa3a5f3d64ef_prof);

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
