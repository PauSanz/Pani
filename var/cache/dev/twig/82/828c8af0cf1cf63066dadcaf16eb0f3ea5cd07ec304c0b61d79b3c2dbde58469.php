<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b8db74e7388c9908fdb56448401f378844b9ff3ea808bac03bf574c8f6c49ddf extends Twig_Template
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
        $__internal_fe7589e9d05c6b8cd0678010ba480fedc9d7f222bf43166b6e670604f9d98333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7589e9d05c6b8cd0678010ba480fedc9d7f222bf43166b6e670604f9d98333->enter($__internal_fe7589e9d05c6b8cd0678010ba480fedc9d7f222bf43166b6e670604f9d98333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_301cece40218055bf4cbd6a2f124be926bfb7188aa4a1577427c032b5e14a998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301cece40218055bf4cbd6a2f124be926bfb7188aa4a1577427c032b5e14a998->enter($__internal_301cece40218055bf4cbd6a2f124be926bfb7188aa4a1577427c032b5e14a998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fe7589e9d05c6b8cd0678010ba480fedc9d7f222bf43166b6e670604f9d98333->leave($__internal_fe7589e9d05c6b8cd0678010ba480fedc9d7f222bf43166b6e670604f9d98333_prof);

        
        $__internal_301cece40218055bf4cbd6a2f124be926bfb7188aa4a1577427c032b5e14a998->leave($__internal_301cece40218055bf4cbd6a2f124be926bfb7188aa4a1577427c032b5e14a998_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
