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
        $__internal_cb1ea950f657945042ce02e6524e43c5dc8f87901ad416f7974e0598293765af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1ea950f657945042ce02e6524e43c5dc8f87901ad416f7974e0598293765af->enter($__internal_cb1ea950f657945042ce02e6524e43c5dc8f87901ad416f7974e0598293765af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bebb7bc8d1b6280e90f5ce7f51db7968bc9765ac936526f015a56bafa0cdb6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebb7bc8d1b6280e90f5ce7f51db7968bc9765ac936526f015a56bafa0cdb6d3->enter($__internal_bebb7bc8d1b6280e90f5ce7f51db7968bc9765ac936526f015a56bafa0cdb6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cb1ea950f657945042ce02e6524e43c5dc8f87901ad416f7974e0598293765af->leave($__internal_cb1ea950f657945042ce02e6524e43c5dc8f87901ad416f7974e0598293765af_prof);

        
        $__internal_bebb7bc8d1b6280e90f5ce7f51db7968bc9765ac936526f015a56bafa0cdb6d3->leave($__internal_bebb7bc8d1b6280e90f5ce7f51db7968bc9765ac936526f015a56bafa0cdb6d3_prof);

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
