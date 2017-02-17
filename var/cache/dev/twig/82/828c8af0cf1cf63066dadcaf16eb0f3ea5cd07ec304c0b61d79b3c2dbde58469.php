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
        $__internal_bece0e42dabdba333e2c51db7610cf74cc01c37c31632cefe5f5049dc7752fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bece0e42dabdba333e2c51db7610cf74cc01c37c31632cefe5f5049dc7752fa6->enter($__internal_bece0e42dabdba333e2c51db7610cf74cc01c37c31632cefe5f5049dc7752fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ee39b6b9a9826c8ad3b91e40e055c56519d07482cda6b9a5e82f73928e217de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee39b6b9a9826c8ad3b91e40e055c56519d07482cda6b9a5e82f73928e217de4->enter($__internal_ee39b6b9a9826c8ad3b91e40e055c56519d07482cda6b9a5e82f73928e217de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bece0e42dabdba333e2c51db7610cf74cc01c37c31632cefe5f5049dc7752fa6->leave($__internal_bece0e42dabdba333e2c51db7610cf74cc01c37c31632cefe5f5049dc7752fa6_prof);

        
        $__internal_ee39b6b9a9826c8ad3b91e40e055c56519d07482cda6b9a5e82f73928e217de4->leave($__internal_ee39b6b9a9826c8ad3b91e40e055c56519d07482cda6b9a5e82f73928e217de4_prof);

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
