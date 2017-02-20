<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ba06bfa98ee853a1a747b17506774099e14f6edcf9c831b8415133f93f46ac9d extends Twig_Template
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
        $__internal_5972497cebe322637899fc6740a2317ff75c6c48ff20a03db9310fbc88b196fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5972497cebe322637899fc6740a2317ff75c6c48ff20a03db9310fbc88b196fe->enter($__internal_5972497cebe322637899fc6740a2317ff75c6c48ff20a03db9310fbc88b196fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_1675f26b2252562db19442310dd7c4f8b9534fb8e2da3fdd711d0efa0ce173b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1675f26b2252562db19442310dd7c4f8b9534fb8e2da3fdd711d0efa0ce173b4->enter($__internal_1675f26b2252562db19442310dd7c4f8b9534fb8e2da3fdd711d0efa0ce173b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_5972497cebe322637899fc6740a2317ff75c6c48ff20a03db9310fbc88b196fe->leave($__internal_5972497cebe322637899fc6740a2317ff75c6c48ff20a03db9310fbc88b196fe_prof);

        
        $__internal_1675f26b2252562db19442310dd7c4f8b9534fb8e2da3fdd711d0efa0ce173b4->leave($__internal_1675f26b2252562db19442310dd7c4f8b9534fb8e2da3fdd711d0efa0ce173b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
