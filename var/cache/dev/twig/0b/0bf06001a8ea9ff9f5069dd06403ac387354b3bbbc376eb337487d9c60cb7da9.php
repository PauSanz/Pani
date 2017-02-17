<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_765cf7567bd13cb000f0a7606104138743636c1065830633d4ad1d23e480ec9a extends Twig_Template
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
        $__internal_4e33e3933c71979bba07ac0329fb5602cfbfab07a82ebca0999e0c8e80dc3c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e33e3933c71979bba07ac0329fb5602cfbfab07a82ebca0999e0c8e80dc3c0c->enter($__internal_4e33e3933c71979bba07ac0329fb5602cfbfab07a82ebca0999e0c8e80dc3c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f8a0ae7aae616b5dac5328e98fbbd77ae2b6a23646c57a7e74150cb6f8666c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a0ae7aae616b5dac5328e98fbbd77ae2b6a23646c57a7e74150cb6f8666c9b->enter($__internal_f8a0ae7aae616b5dac5328e98fbbd77ae2b6a23646c57a7e74150cb6f8666c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4e33e3933c71979bba07ac0329fb5602cfbfab07a82ebca0999e0c8e80dc3c0c->leave($__internal_4e33e3933c71979bba07ac0329fb5602cfbfab07a82ebca0999e0c8e80dc3c0c_prof);

        
        $__internal_f8a0ae7aae616b5dac5328e98fbbd77ae2b6a23646c57a7e74150cb6f8666c9b->leave($__internal_f8a0ae7aae616b5dac5328e98fbbd77ae2b6a23646c57a7e74150cb6f8666c9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
