<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_90cc28985f70a5565b2dfbe2fc2ae162ae28e880f88b6f3138a49f376b796536 extends Twig_Template
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
        $__internal_bfe82ef9bb6fb99d2da6c6a6cd7f466e0034de8c422ecf1b085167dbd34b2752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe82ef9bb6fb99d2da6c6a6cd7f466e0034de8c422ecf1b085167dbd34b2752->enter($__internal_bfe82ef9bb6fb99d2da6c6a6cd7f466e0034de8c422ecf1b085167dbd34b2752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_298595c2b30de1cb47bf4c7ee52ec35ca3140a1ec5265ef3dfa02b24738dab3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298595c2b30de1cb47bf4c7ee52ec35ca3140a1ec5265ef3dfa02b24738dab3d->enter($__internal_298595c2b30de1cb47bf4c7ee52ec35ca3140a1ec5265ef3dfa02b24738dab3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bfe82ef9bb6fb99d2da6c6a6cd7f466e0034de8c422ecf1b085167dbd34b2752->leave($__internal_bfe82ef9bb6fb99d2da6c6a6cd7f466e0034de8c422ecf1b085167dbd34b2752_prof);

        
        $__internal_298595c2b30de1cb47bf4c7ee52ec35ca3140a1ec5265ef3dfa02b24738dab3d->leave($__internal_298595c2b30de1cb47bf4c7ee52ec35ca3140a1ec5265ef3dfa02b24738dab3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
