<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_60e4c89623cceb6bbce80753f52f6abb881e1fb7a88d35ada90c333489a8b02f extends Twig_Template
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
        $__internal_aa42ad18fa367dadaf71aec0c9914c15e2ac518edb975ed77f28fdae4d064107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa42ad18fa367dadaf71aec0c9914c15e2ac518edb975ed77f28fdae4d064107->enter($__internal_aa42ad18fa367dadaf71aec0c9914c15e2ac518edb975ed77f28fdae4d064107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e0750029a9b1039dd8be551aeb7fc8c417c72d1f727f57f5008e5ff6eaba1863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0750029a9b1039dd8be551aeb7fc8c417c72d1f727f57f5008e5ff6eaba1863->enter($__internal_e0750029a9b1039dd8be551aeb7fc8c417c72d1f727f57f5008e5ff6eaba1863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_aa42ad18fa367dadaf71aec0c9914c15e2ac518edb975ed77f28fdae4d064107->leave($__internal_aa42ad18fa367dadaf71aec0c9914c15e2ac518edb975ed77f28fdae4d064107_prof);

        
        $__internal_e0750029a9b1039dd8be551aeb7fc8c417c72d1f727f57f5008e5ff6eaba1863->leave($__internal_e0750029a9b1039dd8be551aeb7fc8c417c72d1f727f57f5008e5ff6eaba1863_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
