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
        $__internal_00930addca1ef53517e7eb62a4130626c979cdaff25c4f1d09f570751023e9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00930addca1ef53517e7eb62a4130626c979cdaff25c4f1d09f570751023e9df->enter($__internal_00930addca1ef53517e7eb62a4130626c979cdaff25c4f1d09f570751023e9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8d4641b806e2782d1e5f838e3c009b0519af7ad48667e998cb67ad8c6c24152d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4641b806e2782d1e5f838e3c009b0519af7ad48667e998cb67ad8c6c24152d->enter($__internal_8d4641b806e2782d1e5f838e3c009b0519af7ad48667e998cb67ad8c6c24152d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_00930addca1ef53517e7eb62a4130626c979cdaff25c4f1d09f570751023e9df->leave($__internal_00930addca1ef53517e7eb62a4130626c979cdaff25c4f1d09f570751023e9df_prof);

        
        $__internal_8d4641b806e2782d1e5f838e3c009b0519af7ad48667e998cb67ad8c6c24152d->leave($__internal_8d4641b806e2782d1e5f838e3c009b0519af7ad48667e998cb67ad8c6c24152d_prof);

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
