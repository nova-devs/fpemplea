<?php

/* :Frontend/profile:indexProfileApplicantCV.html.twig */
class __TwigTemplate_839f5d1bd7037ee33bb43c0d5b8bd77f9f305ce6e9a8c9cf62f792349818232b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/profile:indexProfileApplicantCV.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " FP Emplea - Mi perfil ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
            // line 5
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "done", array()) == 1)) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "profileEditSucc"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 7
                    echo "              <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "profileEditErr"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 13
                    echo "              <div class=\"alert alert-danger alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                    // line 15
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            <section id=\"applicant\" class=\"row\">
                <button id=\"profile-menu-btn\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <aside class=\"col-lg-3 col-md-4 col-sm-5 col-xs-10\">
                    <ul class=\"menu-alumn\">
                        <li class=\"image-user\">
                            <a href=\"\" data-toggle=\"modal\" data-target=\"#change-img\">
                                ";
                // line 26
                if ( !(null === $this->getAttribute(($context["estudiante"] ?? null), "imagen", array()))) {
                    // line 27
                    echo "                                    <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/profileavatar/" . $this->getAttribute(($context["estudiante"] ?? null), "imagen", array())))), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
                                ";
                } else {
                    // line 29
                    echo "                                    <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
                                ";
                }
                // line 31
                echo "                            </a>
                            <h3>
                                <span>
                                    ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "apellidos", array()), "html", null, true);
                echo "
                                </span>
                            </h3>
                        </li>
                        <hr>
                        <!-- OK -->
                        <li class=\"menu-user\">
                            <a data-placement=\"right\" title=\"Inicio\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"glyphicon glyphicon-home icon-menu\" aria-hidden=\"true\">
                                </span>
                                
                                <span class=\"txt\">
                                    Inicio
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-placement=\"right\" title=\"Modificar datos\" href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "#edit\">
                                <span class=\"glyphicon glyphicon-pencil icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Modificar datos
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-placement=\"right\" title=\"Alertas\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "#alerts\">
                                <span class=\"glyphicon glyphicon-envelope icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Alertas <span class=\"badge\">";
                // line 64
                echo twig_escape_filter($this->env, ($context["notRead"] ?? null), "html", null, true);
                echo "</span>
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-placement=\"right\" title=\"Mis ofertas de empleo\" data-target=\"#offers\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "#offers\">
                                <span class=\"glyphicon glyphicon-briefcase icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Mis ofertas de empleo
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Actualiza tu curriculum\" href=\"#cv\">
                                <span class=\"glyphicon glyphicon-file icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Actualiza tu curriculum
                                </span>
                            </a>
                        </li>
                    </ul>
                </aside>
                <div class=\"col-lg-9 col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"tab-content\">
                        <section id=\"cv\" class=\"tab-pane fade\">
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                    <h2>Currículum</h2>
                                    <hr>
                                </div>
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                    <ul class=\"nav nav-tabs wiz\" role=\"tablist\">
                                        <li role=\"presentation\" class=\"active\">
                                            <a href=\"#step1\" data-toggle=\"tab\" aria-controls=\"step1\" role=\"tab\" title=\"Formación\">
                                                <span class=\"round-tab\">
                                                    <i class=\"glyphicon glyphicon-pencil\"></i>
                                                </span>
                                                <span>
                                                    Formación
                                                </span>
                                            </a>
                                        </li>
                                        <li role=\"presentation\">
                                            <a href=\"#step2\" data-toggle=\"tab\" aria-controls=\"step2\" role=\"tab\" title=\"Experiencia laboral\">
                                                <span class=\"round-tab\">
                                                    <i class=\"glyphicon glyphicon-briefcase\"></i>
                                                </span>
                                                <span>
                                                    Experiencia
                                                </span>
                                            </a>
                                        </li>
                                        <li role=\"presentation\">
                                            <a href=\"#step3\" data-toggle=\"tab\" aria-controls=\"step3\" role=\"tab\" title=\"Aptitudes y otros datos\">
                                                <span class=\"round-tab\">
                                                    <i class=\"glyphicon glyphicon-folder-open\"></i>
                                                </span>
                                                <span>
                                                    Aptitudes
                                                </span>
                                            </a>
                                        </li>
                                        <li role=\"presentation\">
                                            <a href=\"#complete\" data-toggle=\"tab\" aria-controls=\"complete\" role=\"tab\" title=\"Finalizado\">
                                                <span class=\"round-tab\">
                                                    <i class=\"glyphicon glyphicon-ok\"></i>
                                                </span>
                                                <span>
                                                    C.V.
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class=\"tab-content container-fluid\">
                                        <div class=\"tab-pane active clearfix\" role=\"tabpanel\" id=\"step1\">
                                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                                                <h3>Formación</h3>
                                                <hr>
                                            </div>
                                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                                                ";
                // line 146
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Education:applicantEducationAdd", array("idApplicant" => $this->getAttribute(                // line 147
($context["estudiante"] ?? null), "id", array()), "id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
                // line 149
                echo "
                                            </div>
                                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                                                <h3>Lista de cursos</h3>
                                                <hr>
                                            </div>
                                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12 education-list\">
                                                ";
                // line 156
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Education:educationApplicantList", array("idApplicant" => $this->getAttribute(                // line 157
($context["estudiante"] ?? null), "id", array()))));
                // line 159
                echo "
                                            </div>
                                        </div>
                                        <div class=\"tab-pane clearfix\" role=\"tabpanel\" id=\"step2\">
                                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                                                <h3>Experiencia laboral</h3>
                                                <hr>
                                            </div>
                                            
                                            <div class=\"col-lg-8 col-sm-12 col-md-12 col-xs-12\">
                                                ";
                // line 169
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Applicant:applicantWorkAdd", array("idApplicant" => $this->getAttribute(                // line 170
($context["estudiante"] ?? null), "id", array()), "id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
                // line 172
                echo "
                                            </div>
                                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                                                <h3>Lista de experiencia</h3>
                                                <hr>
                                            </div>
                                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                                                <ul id=\"workExpList\">
                                                    ";
                // line 180
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Applicant:applicantWorkList", array("idApplicant" => $this->getAttribute(                // line 181
($context["estudiante"] ?? null), "id", array()), "id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
                // line 183
                echo "
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane clearfix\" role=\"tabpanel\" id=\"step3\">
                                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                                                <h3>Aptitudes</h3>
                                                <hr>
                                            </div>
                                            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                                                ";
                // line 193
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Skill:applicantSkillAdd", array("idApplicant" => $this->getAttribute(                // line 194
($context["estudiante"] ?? null), "id", array()), "id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
                // line 196
                echo "
                                            </div>
                                            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                                                ";
                // line 199
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Skill:applicantPersonalSkillAdd", array("idApplicant" => $this->getAttribute(                // line 200
($context["estudiante"] ?? null), "id", array()), "id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
                // line 202
                echo "
                                            </div>
                                            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                                                ";
                // line 205
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Skill:applicantCommonSkillAdd", array("idApplicant" => $this->getAttribute(                // line 206
($context["estudiante"] ?? null), "id", array()), "id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
                // line 208
                echo "
                                            </div>
                                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12 skill-list\">
                                                ";
                // line 211
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Skill:applicantSkillList", array("idApplicant" => $this->getAttribute(                // line 212
($context["estudiante"] ?? null), "id", array()))));
                // line 214
                echo "
                                            </div>
                                        </div>
                                        <div class=\"tab-pane text-center\" role=\"tabpanel\" id=\"complete\">
                                            <p class=\"text-center\" style=\"margin-top:50px;\">Para crear tu curriculum con Europass, accede al siguiente enlace ! </p>
                                            <p class=\"text-center\"><a href=\"https://europass.cedefop.europa.eu/editors/es/cv/compose\" target=\"_blank\" class=\"button cta-2\">Crear Europass</a></p>
                                            <br>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        ";
            }
            // line 230
            echo "    ";
        }
        // line 231
        echo "    ";
        // line 232
        echo "      <div id=\"change-img\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title\">Selecciona una imagen para tu perfil</h4>
            </div>
            <div class=\"modal-body\">
     
              ";
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:AvatarEdit"));
        echo "

            </div>
            <div class=\"modal-footer\">
            </div>
          </div>
        </div>
      </div>
";
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:indexProfileApplicantCV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 241,  346 => 232,  344 => 231,  341 => 230,  323 => 214,  321 => 212,  320 => 211,  315 => 208,  313 => 206,  312 => 205,  307 => 202,  305 => 200,  304 => 199,  299 => 196,  297 => 194,  296 => 193,  284 => 183,  282 => 181,  281 => 180,  271 => 172,  269 => 170,  268 => 169,  256 => 159,  254 => 157,  253 => 156,  244 => 149,  242 => 147,  241 => 146,  161 => 69,  153 => 64,  146 => 60,  134 => 51,  121 => 41,  109 => 34,  104 => 31,  98 => 29,  92 => 27,  90 => 26,  80 => 18,  71 => 15,  67 => 13,  62 => 12,  53 => 9,  49 => 7,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:indexProfileApplicantCV.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/indexProfileApplicantCV.html.twig");
    }
}