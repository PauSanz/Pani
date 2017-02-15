<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_79e42e6a4309996e822064f3b5df71e72a20d83c3e2b90f2e6c581430e7f3900 extends Twig_Template
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
        $__internal_37bbb3ae6e6454b21714a06d62d8d9b3b2c7129816f8d526a332b910399d7f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bbb3ae6e6454b21714a06d62d8d9b3b2c7129816f8d526a332b910399d7f17->enter($__internal_37bbb3ae6e6454b21714a06d62d8d9b3b2c7129816f8d526a332b910399d7f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d1a41d1c3bef49ac327824886b0ba7dd6b9d628d35ff251dd0173d006b5bb82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a41d1c3bef49ac327824886b0ba7dd6b9d628d35ff251dd0173d006b5bb82e->enter($__internal_d1a41d1c3bef49ac327824886b0ba7dd6b9d628d35ff251dd0173d006b5bb82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_37bbb3ae6e6454b21714a06d62d8d9b3b2c7129816f8d526a332b910399d7f17->leave($__internal_37bbb3ae6e6454b21714a06d62d8d9b3b2c7129816f8d526a332b910399d7f17_prof);

        
        $__internal_d1a41d1c3bef49ac327824886b0ba7dd6b9d628d35ff251dd0173d006b5bb82e->leave($__internal_d1a41d1c3bef49ac327824886b0ba7dd6b9d628d35ff251dd0173d006b5bb82e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
