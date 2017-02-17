<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bb589a6dd291b61b795e1b32ab4fa249a6e33604ea936d84ea7ccdf0b2a6ec59 extends Twig_Template
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
        $__internal_098775a492d7639213f02e773ff1d3247dd8bcc81d5a2b184d5e9352997cf54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098775a492d7639213f02e773ff1d3247dd8bcc81d5a2b184d5e9352997cf54a->enter($__internal_098775a492d7639213f02e773ff1d3247dd8bcc81d5a2b184d5e9352997cf54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e456e44c0919c802002406a5495e35897efbf3921d269c74cb1dab1327c0658f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e456e44c0919c802002406a5495e35897efbf3921d269c74cb1dab1327c0658f->enter($__internal_e456e44c0919c802002406a5495e35897efbf3921d269c74cb1dab1327c0658f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_098775a492d7639213f02e773ff1d3247dd8bcc81d5a2b184d5e9352997cf54a->leave($__internal_098775a492d7639213f02e773ff1d3247dd8bcc81d5a2b184d5e9352997cf54a_prof);

        
        $__internal_e456e44c0919c802002406a5495e35897efbf3921d269c74cb1dab1327c0658f->leave($__internal_e456e44c0919c802002406a5495e35897efbf3921d269c74cb1dab1327c0658f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
