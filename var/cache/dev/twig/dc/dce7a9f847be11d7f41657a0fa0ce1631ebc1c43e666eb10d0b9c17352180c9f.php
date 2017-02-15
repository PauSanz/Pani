<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_ff82b3f73f1121c00aef3c37f604d4e2a4fdef503e92fe50462523ff154dd787 extends Twig_Template
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
        $__internal_8b3201c9d37b88367e2a46577402e83038ce00c3f1c1914f455e175d927a7512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3201c9d37b88367e2a46577402e83038ce00c3f1c1914f455e175d927a7512->enter($__internal_8b3201c9d37b88367e2a46577402e83038ce00c3f1c1914f455e175d927a7512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_9bac96886ae78e8f03854041d21967c962ed897fb15510a4ebe96379cc233e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bac96886ae78e8f03854041d21967c962ed897fb15510a4ebe96379cc233e6b->enter($__internal_9bac96886ae78e8f03854041d21967c962ed897fb15510a4ebe96379cc233e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_8b3201c9d37b88367e2a46577402e83038ce00c3f1c1914f455e175d927a7512->leave($__internal_8b3201c9d37b88367e2a46577402e83038ce00c3f1c1914f455e175d927a7512_prof);

        
        $__internal_9bac96886ae78e8f03854041d21967c962ed897fb15510a4ebe96379cc233e6b->leave($__internal_9bac96886ae78e8f03854041d21967c962ed897fb15510a4ebe96379cc233e6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
