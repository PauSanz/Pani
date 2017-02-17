<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_92f62d2846d202a26fb29024b582cd18584bc0b31caa89bf64db66d776a71f16 extends Twig_Template
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
        $__internal_abae723a08cc2da982e771f5cc19adfc8c6d7dba071757493af6daaeb958f64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abae723a08cc2da982e771f5cc19adfc8c6d7dba071757493af6daaeb958f64c->enter($__internal_abae723a08cc2da982e771f5cc19adfc8c6d7dba071757493af6daaeb958f64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a02b504ca29a7d13f905a02ec08af172220218eb4294417ba926d0c830fed8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02b504ca29a7d13f905a02ec08af172220218eb4294417ba926d0c830fed8d3->enter($__internal_a02b504ca29a7d13f905a02ec08af172220218eb4294417ba926d0c830fed8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_abae723a08cc2da982e771f5cc19adfc8c6d7dba071757493af6daaeb958f64c->leave($__internal_abae723a08cc2da982e771f5cc19adfc8c6d7dba071757493af6daaeb958f64c_prof);

        
        $__internal_a02b504ca29a7d13f905a02ec08af172220218eb4294417ba926d0c830fed8d3->leave($__internal_a02b504ca29a7d13f905a02ec08af172220218eb4294417ba926d0c830fed8d3_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
