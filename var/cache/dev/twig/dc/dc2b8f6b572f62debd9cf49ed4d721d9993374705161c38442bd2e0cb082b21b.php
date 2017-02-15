<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7705f5f16ae20cf321cf838896f6a640eec275c13d7f0c049caaef631ce3e3a7 extends Twig_Template
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
        $__internal_ee00dab6f8b1fa202d860d23ce43f5b1931e6979b3677da359a7d901c9c54575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee00dab6f8b1fa202d860d23ce43f5b1931e6979b3677da359a7d901c9c54575->enter($__internal_ee00dab6f8b1fa202d860d23ce43f5b1931e6979b3677da359a7d901c9c54575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_743b83f7c738dddc38aa4ac2b7fbe540ac01cdaa8e1e5477e3eb1ed1f660a04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743b83f7c738dddc38aa4ac2b7fbe540ac01cdaa8e1e5477e3eb1ed1f660a04d->enter($__internal_743b83f7c738dddc38aa4ac2b7fbe540ac01cdaa8e1e5477e3eb1ed1f660a04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ee00dab6f8b1fa202d860d23ce43f5b1931e6979b3677da359a7d901c9c54575->leave($__internal_ee00dab6f8b1fa202d860d23ce43f5b1931e6979b3677da359a7d901c9c54575_prof);

        
        $__internal_743b83f7c738dddc38aa4ac2b7fbe540ac01cdaa8e1e5477e3eb1ed1f660a04d->leave($__internal_743b83f7c738dddc38aa4ac2b7fbe540ac01cdaa8e1e5477e3eb1ed1f660a04d_prof);

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
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
