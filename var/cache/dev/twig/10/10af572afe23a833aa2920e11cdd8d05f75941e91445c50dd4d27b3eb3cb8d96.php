<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_60e4c89623cceb6bbce80753f52f6abb881e1fb7a88d35ada90c333489a8b02f extends Twig_Template
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
        $__internal_18ff75b66d8518575e2e15d566819484b62b8328c3be55f5a416f7fb15853d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ff75b66d8518575e2e15d566819484b62b8328c3be55f5a416f7fb15853d2a->enter($__internal_18ff75b66d8518575e2e15d566819484b62b8328c3be55f5a416f7fb15853d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1e99f36ba50a852564de24413a583c1693853f3d607ff59c3d814fca33efab6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e99f36ba50a852564de24413a583c1693853f3d607ff59c3d814fca33efab6f->enter($__internal_1e99f36ba50a852564de24413a583c1693853f3d607ff59c3d814fca33efab6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_18ff75b66d8518575e2e15d566819484b62b8328c3be55f5a416f7fb15853d2a->leave($__internal_18ff75b66d8518575e2e15d566819484b62b8328c3be55f5a416f7fb15853d2a_prof);

        
        $__internal_1e99f36ba50a852564de24413a583c1693853f3d607ff59c3d814fca33efab6f->leave($__internal_1e99f36ba50a852564de24413a583c1693853f3d607ff59c3d814fca33efab6f_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
