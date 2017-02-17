<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c9372cd0d428595ee249934caeeac2fbb47a251c87d9b31904583c7286064470 extends Twig_Template
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
        $__internal_b2bb79859f1f66f5b5ca38e9667ba748bf8c69d1e731cf44e1a02c20671f7a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2bb79859f1f66f5b5ca38e9667ba748bf8c69d1e731cf44e1a02c20671f7a8d->enter($__internal_b2bb79859f1f66f5b5ca38e9667ba748bf8c69d1e731cf44e1a02c20671f7a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c915609bc3195b7065a69c9ba5782caad937846e22b187c9b3c686185402454e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c915609bc3195b7065a69c9ba5782caad937846e22b187c9b3c686185402454e->enter($__internal_c915609bc3195b7065a69c9ba5782caad937846e22b187c9b3c686185402454e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b2bb79859f1f66f5b5ca38e9667ba748bf8c69d1e731cf44e1a02c20671f7a8d->leave($__internal_b2bb79859f1f66f5b5ca38e9667ba748bf8c69d1e731cf44e1a02c20671f7a8d_prof);

        
        $__internal_c915609bc3195b7065a69c9ba5782caad937846e22b187c9b3c686185402454e->leave($__internal_c915609bc3195b7065a69c9ba5782caad937846e22b187c9b3c686185402454e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
