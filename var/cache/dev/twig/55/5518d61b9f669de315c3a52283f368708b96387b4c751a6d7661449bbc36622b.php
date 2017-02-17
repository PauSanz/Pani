<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1190cd32d4fb34381624ca6ed13fe5c4fd30002951773fb6c2a751742cd046b1 extends Twig_Template
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
        $__internal_b659d57f554dffbbe7398a08b692069fff2da633940ca91e4a1e2daa5a224b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b659d57f554dffbbe7398a08b692069fff2da633940ca91e4a1e2daa5a224b6b->enter($__internal_b659d57f554dffbbe7398a08b692069fff2da633940ca91e4a1e2daa5a224b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e00540176add25439b51139e3cd473c64a70d8b9e76f254cb74fd0946584ab34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00540176add25439b51139e3cd473c64a70d8b9e76f254cb74fd0946584ab34->enter($__internal_e00540176add25439b51139e3cd473c64a70d8b9e76f254cb74fd0946584ab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_b659d57f554dffbbe7398a08b692069fff2da633940ca91e4a1e2daa5a224b6b->leave($__internal_b659d57f554dffbbe7398a08b692069fff2da633940ca91e4a1e2daa5a224b6b_prof);

        
        $__internal_e00540176add25439b51139e3cd473c64a70d8b9e76f254cb74fd0946584ab34->leave($__internal_e00540176add25439b51139e3cd473c64a70d8b9e76f254cb74fd0946584ab34_prof);

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
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
