<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_c3e4f6b0026b64553ea905f9541c00c830682b9287cd4a2de8db09b445cf158c extends Twig_Template
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
        $__internal_9890861a84f63e7cee5c69fed842776b72f0b892727c48fd0253e055091fe63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9890861a84f63e7cee5c69fed842776b72f0b892727c48fd0253e055091fe63c->enter($__internal_9890861a84f63e7cee5c69fed842776b72f0b892727c48fd0253e055091fe63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f66969b61a9bcc8545b27b35e3bdb9f0bd0cb44e9e04d1b889f4dcc9b5b60d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66969b61a9bcc8545b27b35e3bdb9f0bd0cb44e9e04d1b889f4dcc9b5b60d24->enter($__internal_f66969b61a9bcc8545b27b35e3bdb9f0bd0cb44e9e04d1b889f4dcc9b5b60d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_9890861a84f63e7cee5c69fed842776b72f0b892727c48fd0253e055091fe63c->leave($__internal_9890861a84f63e7cee5c69fed842776b72f0b892727c48fd0253e055091fe63c_prof);

        
        $__internal_f66969b61a9bcc8545b27b35e3bdb9f0bd0cb44e9e04d1b889f4dcc9b5b60d24->leave($__internal_f66969b61a9bcc8545b27b35e3bdb9f0bd0cb44e9e04d1b889f4dcc9b5b60d24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
