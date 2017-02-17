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
        $__internal_315118fbee1e59f02ac210f40d83a2c0b6c6aa1e944813111fa3817b2beec54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315118fbee1e59f02ac210f40d83a2c0b6c6aa1e944813111fa3817b2beec54c->enter($__internal_315118fbee1e59f02ac210f40d83a2c0b6c6aa1e944813111fa3817b2beec54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_0d10330a5bbd142a42d001cc961e596cf21d6549ef2b8283b64c2254bb339385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d10330a5bbd142a42d001cc961e596cf21d6549ef2b8283b64c2254bb339385->enter($__internal_0d10330a5bbd142a42d001cc961e596cf21d6549ef2b8283b64c2254bb339385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_315118fbee1e59f02ac210f40d83a2c0b6c6aa1e944813111fa3817b2beec54c->leave($__internal_315118fbee1e59f02ac210f40d83a2c0b6c6aa1e944813111fa3817b2beec54c_prof);

        
        $__internal_0d10330a5bbd142a42d001cc961e596cf21d6549ef2b8283b64c2254bb339385->leave($__internal_0d10330a5bbd142a42d001cc961e596cf21d6549ef2b8283b64c2254bb339385_prof);

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
