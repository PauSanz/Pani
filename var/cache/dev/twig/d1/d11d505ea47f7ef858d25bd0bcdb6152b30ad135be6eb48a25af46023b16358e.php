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
        $__internal_b5554532b8070e1b27408cf0c3b31c07887912209ef67d4395da7e95910a2e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5554532b8070e1b27408cf0c3b31c07887912209ef67d4395da7e95910a2e7e->enter($__internal_b5554532b8070e1b27408cf0c3b31c07887912209ef67d4395da7e95910a2e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f626ec919bb6fa8739c263a52ccba63ff4baa29c47051cc434dd03bde8788437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f626ec919bb6fa8739c263a52ccba63ff4baa29c47051cc434dd03bde8788437->enter($__internal_f626ec919bb6fa8739c263a52ccba63ff4baa29c47051cc434dd03bde8788437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b5554532b8070e1b27408cf0c3b31c07887912209ef67d4395da7e95910a2e7e->leave($__internal_b5554532b8070e1b27408cf0c3b31c07887912209ef67d4395da7e95910a2e7e_prof);

        
        $__internal_f626ec919bb6fa8739c263a52ccba63ff4baa29c47051cc434dd03bde8788437->leave($__internal_f626ec919bb6fa8739c263a52ccba63ff4baa29c47051cc434dd03bde8788437_prof);

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
