<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f52e31fbf87ff51ac6b3b3a5d70a0d2149ae3b1926e6e441cd6d6335239c6f2e extends Twig_Template
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
        $__internal_b77b1df1ee9198dcf940452307fe7c0ba638b0e759d470728f6e57856686592c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77b1df1ee9198dcf940452307fe7c0ba638b0e759d470728f6e57856686592c->enter($__internal_b77b1df1ee9198dcf940452307fe7c0ba638b0e759d470728f6e57856686592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a48de5b8d7b3a7b6fbfbe04edefc724307e4a631caaedd817b7acc7af6c21cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48de5b8d7b3a7b6fbfbe04edefc724307e4a631caaedd817b7acc7af6c21cd5->enter($__internal_a48de5b8d7b3a7b6fbfbe04edefc724307e4a631caaedd817b7acc7af6c21cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b77b1df1ee9198dcf940452307fe7c0ba638b0e759d470728f6e57856686592c->leave($__internal_b77b1df1ee9198dcf940452307fe7c0ba638b0e759d470728f6e57856686592c_prof);

        
        $__internal_a48de5b8d7b3a7b6fbfbe04edefc724307e4a631caaedd817b7acc7af6c21cd5->leave($__internal_a48de5b8d7b3a7b6fbfbe04edefc724307e4a631caaedd817b7acc7af6c21cd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
