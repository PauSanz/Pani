<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f678339ef624e0a41259bde234ed5b2a1c12f9e1b385bfb0965c06697d63feda extends Twig_Template
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
        $__internal_dd4675472d3d22d07fce6de1606ebed372f1854bc36f419c2bd0d6bf3d8f18e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4675472d3d22d07fce6de1606ebed372f1854bc36f419c2bd0d6bf3d8f18e3->enter($__internal_dd4675472d3d22d07fce6de1606ebed372f1854bc36f419c2bd0d6bf3d8f18e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_32297408303d7f69e813a9cfebc3034d48f37b98f0406093547cd562a71242ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32297408303d7f69e813a9cfebc3034d48f37b98f0406093547cd562a71242ef->enter($__internal_32297408303d7f69e813a9cfebc3034d48f37b98f0406093547cd562a71242ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd4675472d3d22d07fce6de1606ebed372f1854bc36f419c2bd0d6bf3d8f18e3->leave($__internal_dd4675472d3d22d07fce6de1606ebed372f1854bc36f419c2bd0d6bf3d8f18e3_prof);

        
        $__internal_32297408303d7f69e813a9cfebc3034d48f37b98f0406093547cd562a71242ef->leave($__internal_32297408303d7f69e813a9cfebc3034d48f37b98f0406093547cd562a71242ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
