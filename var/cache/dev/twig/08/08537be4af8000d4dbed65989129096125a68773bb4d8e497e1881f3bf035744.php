<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8a4d41bb74f452199bf28de936c450a734ad83d53d445b4d2685954a776bba10 extends Twig_Template
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
        $__internal_9e8e83bb5ffe906e6dfc8e8d03f5f2d5ce790d3a724ac604a72e48fc15fb4ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8e83bb5ffe906e6dfc8e8d03f5f2d5ce790d3a724ac604a72e48fc15fb4ade->enter($__internal_9e8e83bb5ffe906e6dfc8e8d03f5f2d5ce790d3a724ac604a72e48fc15fb4ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_dabe8892eb0500aae3f41a591ebb26496c4c18d3f8c75918b42f66ded26bbc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabe8892eb0500aae3f41a591ebb26496c4c18d3f8c75918b42f66ded26bbc24->enter($__internal_dabe8892eb0500aae3f41a591ebb26496c4c18d3f8c75918b42f66ded26bbc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9e8e83bb5ffe906e6dfc8e8d03f5f2d5ce790d3a724ac604a72e48fc15fb4ade->leave($__internal_9e8e83bb5ffe906e6dfc8e8d03f5f2d5ce790d3a724ac604a72e48fc15fb4ade_prof);

        
        $__internal_dabe8892eb0500aae3f41a591ebb26496c4c18d3f8c75918b42f66ded26bbc24->leave($__internal_dabe8892eb0500aae3f41a591ebb26496c4c18d3f8c75918b42f66ded26bbc24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
