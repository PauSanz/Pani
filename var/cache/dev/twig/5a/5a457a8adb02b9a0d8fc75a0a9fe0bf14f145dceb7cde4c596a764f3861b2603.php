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
        $__internal_41a32cd181e60b23b68fef6cc0b23bf3926c152994547f572c052c70381788c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a32cd181e60b23b68fef6cc0b23bf3926c152994547f572c052c70381788c4->enter($__internal_41a32cd181e60b23b68fef6cc0b23bf3926c152994547f572c052c70381788c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1ee46a3ae772bfe73a7a43d63ccc88f478d3ab4af8c11c76cbee6a5edc9fecab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee46a3ae772bfe73a7a43d63ccc88f478d3ab4af8c11c76cbee6a5edc9fecab->enter($__internal_1ee46a3ae772bfe73a7a43d63ccc88f478d3ab4af8c11c76cbee6a5edc9fecab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_41a32cd181e60b23b68fef6cc0b23bf3926c152994547f572c052c70381788c4->leave($__internal_41a32cd181e60b23b68fef6cc0b23bf3926c152994547f572c052c70381788c4_prof);

        
        $__internal_1ee46a3ae772bfe73a7a43d63ccc88f478d3ab4af8c11c76cbee6a5edc9fecab->leave($__internal_1ee46a3ae772bfe73a7a43d63ccc88f478d3ab4af8c11c76cbee6a5edc9fecab_prof);

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
