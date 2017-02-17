<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b8db74e7388c9908fdb56448401f378844b9ff3ea808bac03bf574c8f6c49ddf extends Twig_Template
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
        $__internal_ff5d306d25ba650f52aa5878d62ee74839b52c062944899a17cd8518f79933db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5d306d25ba650f52aa5878d62ee74839b52c062944899a17cd8518f79933db->enter($__internal_ff5d306d25ba650f52aa5878d62ee74839b52c062944899a17cd8518f79933db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8f2098a8567126e73185bd3311f75cc9945606ea8d67e437b5b83a9f6e0b0162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2098a8567126e73185bd3311f75cc9945606ea8d67e437b5b83a9f6e0b0162->enter($__internal_8f2098a8567126e73185bd3311f75cc9945606ea8d67e437b5b83a9f6e0b0162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ff5d306d25ba650f52aa5878d62ee74839b52c062944899a17cd8518f79933db->leave($__internal_ff5d306d25ba650f52aa5878d62ee74839b52c062944899a17cd8518f79933db_prof);

        
        $__internal_8f2098a8567126e73185bd3311f75cc9945606ea8d67e437b5b83a9f6e0b0162->leave($__internal_8f2098a8567126e73185bd3311f75cc9945606ea8d67e437b5b83a9f6e0b0162_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
