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
        $__internal_39a40a60e6c438c61afda8738f0f6c84aa1437970691ffacd395cfbe80a7dafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a40a60e6c438c61afda8738f0f6c84aa1437970691ffacd395cfbe80a7dafb->enter($__internal_39a40a60e6c438c61afda8738f0f6c84aa1437970691ffacd395cfbe80a7dafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_195ae207ec250d42ca772f90dc8f9b3ac72150a8c1d35f663b7b7624c6b192a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195ae207ec250d42ca772f90dc8f9b3ac72150a8c1d35f663b7b7624c6b192a8->enter($__internal_195ae207ec250d42ca772f90dc8f9b3ac72150a8c1d35f663b7b7624c6b192a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_39a40a60e6c438c61afda8738f0f6c84aa1437970691ffacd395cfbe80a7dafb->leave($__internal_39a40a60e6c438c61afda8738f0f6c84aa1437970691ffacd395cfbe80a7dafb_prof);

        
        $__internal_195ae207ec250d42ca772f90dc8f9b3ac72150a8c1d35f663b7b7624c6b192a8->leave($__internal_195ae207ec250d42ca772f90dc8f9b3ac72150a8c1d35f663b7b7624c6b192a8_prof);

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
