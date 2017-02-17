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
        $__internal_4adea94a959ee3269d81bff3f29662a1064c9c5ea3b99985c52b198e501035ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4adea94a959ee3269d81bff3f29662a1064c9c5ea3b99985c52b198e501035ac->enter($__internal_4adea94a959ee3269d81bff3f29662a1064c9c5ea3b99985c52b198e501035ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c9f2f60364eebf121f87a19c945839dd54bc06fefdb125f57671a3b7204662a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f2f60364eebf121f87a19c945839dd54bc06fefdb125f57671a3b7204662a1->enter($__internal_c9f2f60364eebf121f87a19c945839dd54bc06fefdb125f57671a3b7204662a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4adea94a959ee3269d81bff3f29662a1064c9c5ea3b99985c52b198e501035ac->leave($__internal_4adea94a959ee3269d81bff3f29662a1064c9c5ea3b99985c52b198e501035ac_prof);

        
        $__internal_c9f2f60364eebf121f87a19c945839dd54bc06fefdb125f57671a3b7204662a1->leave($__internal_c9f2f60364eebf121f87a19c945839dd54bc06fefdb125f57671a3b7204662a1_prof);

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
