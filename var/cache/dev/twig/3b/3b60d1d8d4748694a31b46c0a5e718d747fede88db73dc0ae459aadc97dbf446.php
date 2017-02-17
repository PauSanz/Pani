<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd6bde29c12e4a2fad6dc1d6352473d5a801a0fc30fd61fb769919c8608a3c95 extends Twig_Template
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
        $__internal_e6366b9b30356714d003ddd0e25d24da118bc1eab08749edddfc18a96294d62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6366b9b30356714d003ddd0e25d24da118bc1eab08749edddfc18a96294d62e->enter($__internal_e6366b9b30356714d003ddd0e25d24da118bc1eab08749edddfc18a96294d62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7bec07d9e05f12b5a80422d78488d73a58ed8f72e276a61e42585c2536b30798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bec07d9e05f12b5a80422d78488d73a58ed8f72e276a61e42585c2536b30798->enter($__internal_7bec07d9e05f12b5a80422d78488d73a58ed8f72e276a61e42585c2536b30798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e6366b9b30356714d003ddd0e25d24da118bc1eab08749edddfc18a96294d62e->leave($__internal_e6366b9b30356714d003ddd0e25d24da118bc1eab08749edddfc18a96294d62e_prof);

        
        $__internal_7bec07d9e05f12b5a80422d78488d73a58ed8f72e276a61e42585c2536b30798->leave($__internal_7bec07d9e05f12b5a80422d78488d73a58ed8f72e276a61e42585c2536b30798_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
