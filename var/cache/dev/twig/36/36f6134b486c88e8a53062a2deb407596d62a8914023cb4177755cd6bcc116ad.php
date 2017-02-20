<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9984595c51255aae81c32552cb2155768c4ccdc9d3607065e16d8f2651f35aa1 extends Twig_Template
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
        $__internal_56f625951d4a0ccf147d5e302362f8d0deb492220706779ea401bcd291ec9c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f625951d4a0ccf147d5e302362f8d0deb492220706779ea401bcd291ec9c8c->enter($__internal_56f625951d4a0ccf147d5e302362f8d0deb492220706779ea401bcd291ec9c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_5db146a6db398c7e68205c8307d7913f2b8fe5b9a380409c083be7b42bd96af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db146a6db398c7e68205c8307d7913f2b8fe5b9a380409c083be7b42bd96af0->enter($__internal_5db146a6db398c7e68205c8307d7913f2b8fe5b9a380409c083be7b42bd96af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_56f625951d4a0ccf147d5e302362f8d0deb492220706779ea401bcd291ec9c8c->leave($__internal_56f625951d4a0ccf147d5e302362f8d0deb492220706779ea401bcd291ec9c8c_prof);

        
        $__internal_5db146a6db398c7e68205c8307d7913f2b8fe5b9a380409c083be7b42bd96af0->leave($__internal_5db146a6db398c7e68205c8307d7913f2b8fe5b9a380409c083be7b42bd96af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
