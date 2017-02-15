<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dece533eae3a867b80852feeb852d1e792806433d3124856faabc9498796bf79 extends Twig_Template
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
        $__internal_3596d1ab95e484b2d9eca282281cafb75b9f1619558b238c570fa0a5d3decbd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3596d1ab95e484b2d9eca282281cafb75b9f1619558b238c570fa0a5d3decbd4->enter($__internal_3596d1ab95e484b2d9eca282281cafb75b9f1619558b238c570fa0a5d3decbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c757225ac0c7bf7de2d9b4d867d680f4fbca66199fff11eac76f812fc676e0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c757225ac0c7bf7de2d9b4d867d680f4fbca66199fff11eac76f812fc676e0ad->enter($__internal_c757225ac0c7bf7de2d9b4d867d680f4fbca66199fff11eac76f812fc676e0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3596d1ab95e484b2d9eca282281cafb75b9f1619558b238c570fa0a5d3decbd4->leave($__internal_3596d1ab95e484b2d9eca282281cafb75b9f1619558b238c570fa0a5d3decbd4_prof);

        
        $__internal_c757225ac0c7bf7de2d9b4d867d680f4fbca66199fff11eac76f812fc676e0ad->leave($__internal_c757225ac0c7bf7de2d9b4d867d680f4fbca66199fff11eac76f812fc676e0ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
