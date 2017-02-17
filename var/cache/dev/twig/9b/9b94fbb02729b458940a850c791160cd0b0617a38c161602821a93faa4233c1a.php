<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b124abf8e1ee7f9d3bfbd371b1e444633ae7c2267f94ff6dec1cbe52cfe8601b extends Twig_Template
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
        $__internal_0f516f6fa5097a230d75b4663b2b6ce7151996d9fd47fa036d5687d2f5215837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f516f6fa5097a230d75b4663b2b6ce7151996d9fd47fa036d5687d2f5215837->enter($__internal_0f516f6fa5097a230d75b4663b2b6ce7151996d9fd47fa036d5687d2f5215837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7d3e905779eb58a0ac87b55e436592826899fbe11cbc930f861bec3ebf89498c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3e905779eb58a0ac87b55e436592826899fbe11cbc930f861bec3ebf89498c->enter($__internal_7d3e905779eb58a0ac87b55e436592826899fbe11cbc930f861bec3ebf89498c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0f516f6fa5097a230d75b4663b2b6ce7151996d9fd47fa036d5687d2f5215837->leave($__internal_0f516f6fa5097a230d75b4663b2b6ce7151996d9fd47fa036d5687d2f5215837_prof);

        
        $__internal_7d3e905779eb58a0ac87b55e436592826899fbe11cbc930f861bec3ebf89498c->leave($__internal_7d3e905779eb58a0ac87b55e436592826899fbe11cbc930f861bec3ebf89498c_prof);

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
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
