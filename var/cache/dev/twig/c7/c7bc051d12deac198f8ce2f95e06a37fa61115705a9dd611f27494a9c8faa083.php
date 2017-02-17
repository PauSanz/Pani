<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b581664d64389c0756095ac766011c0f162e181e80e7e37a7984e965b4d5132b extends Twig_Template
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
        $__internal_ab491279a8f89d3242d069fea56a9aa409b879a5e10a04d4ff75434299fa7cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab491279a8f89d3242d069fea56a9aa409b879a5e10a04d4ff75434299fa7cb1->enter($__internal_ab491279a8f89d3242d069fea56a9aa409b879a5e10a04d4ff75434299fa7cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7a39070cda260a8cf6b4ce52a6b16fbf6cdf30bf7d35036ebee4f69ed30ec7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a39070cda260a8cf6b4ce52a6b16fbf6cdf30bf7d35036ebee4f69ed30ec7e9->enter($__internal_7a39070cda260a8cf6b4ce52a6b16fbf6cdf30bf7d35036ebee4f69ed30ec7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ab491279a8f89d3242d069fea56a9aa409b879a5e10a04d4ff75434299fa7cb1->leave($__internal_ab491279a8f89d3242d069fea56a9aa409b879a5e10a04d4ff75434299fa7cb1_prof);

        
        $__internal_7a39070cda260a8cf6b4ce52a6b16fbf6cdf30bf7d35036ebee4f69ed30ec7e9->leave($__internal_7a39070cda260a8cf6b4ce52a6b16fbf6cdf30bf7d35036ebee4f69ed30ec7e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
