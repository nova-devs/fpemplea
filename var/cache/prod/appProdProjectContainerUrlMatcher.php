<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/como-empezar-')) {
                // crear_empresa
                if (0 === strpos($pathinfo, '/como-empezar-empresa') && preg_match('#^/como\\-empezar\\-empresa/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crear_empresa')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::crearEmpresaAction',));
                }

                // crear_centro
                if (0 === strpos($pathinfo, '/como-empezar-centro') && preg_match('#^/como\\-empezar\\-centro/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crear_centro')), array (  '_controller' => 'AppBundle\\Controller\\SchoolController::crearCentroAction',));
                }

                // crear_estudiante
                if (0 === strpos($pathinfo, '/como-empezar-candidato') && preg_match('#^/como\\-empezar\\-candidato/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crear_estudiante')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::crearEstudianteAction',));
                }

            }

            // contact_mail
            if (0 === strpos($pathinfo, '/contactar') && preg_match('#^/contactar/(?P<idUser>[^/]++)/(?P<senderId>[^/]++)/(?P<senderMail>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_mail')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ContactMailAction',));
            }

            if (0 === strpos($pathinfo, '/crear-')) {
                // crear_formacion_reglada
                if (0 === strpos($pathinfo, '/crear-estudio/empresa') && preg_match('#^/crear\\-estudio/empresa/(?P<idCentro>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crear_formacion_reglada')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::crearFormacionRegladaAction',));
                }

                // create_education
                if (0 === strpos($pathinfo, '/crear-formacion') && preg_match('#^/crear\\-formacion/(?P<idSchool>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_education')), array (  '_controller' => 'AppBundle\\Controller\\EducationController::educationAddAction',));
                }

                // crear_oferta
                if (0 === strpos($pathinfo, '/crear-oferta/empresa') && preg_match('#^/crear\\-oferta/empresa/(?P<idEmpresa>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crear_oferta')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::crearOfertaAction',));
                }

            }

            // close_offer
            if (0 === strpos($pathinfo, '/cerrar-oferta') && preg_match('#^/cerrar\\-oferta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'close_offer')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::closeOfferAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/modificar')) {
            if (0 === strpos($pathinfo, '/modificar-')) {
                // modificar_empresa
                if (0 === strpos($pathinfo, '/modificar-perfil-empresa') && preg_match('#^/modificar\\-perfil\\-empresa/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificar_empresa')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::modificarEmpresaAction',));
                }

                // modificar_centro
                if (0 === strpos($pathinfo, '/modificar-centro') && preg_match('#^/modificar\\-centro/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificar_centro')), array (  '_controller' => 'AppBundle\\Controller\\SchoolController::schoolModifyAction',));
                }

                // cv-edit
                if (0 === strpos($pathinfo, '/modificar-cv') && preg_match('#^/modificar\\-cv/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv-edit')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::getApplicantCVAction',));
                }

                // modificar_oferta
                if (0 === strpos($pathinfo, '/modificar-oferta') && preg_match('#^/modificar\\-oferta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificar_oferta')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::modificarOfertaAction',));
                }

            }

            // modificar_estudiante
            if (preg_match('#^/modificar(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificar_estudiante')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::modificarEstudianteAction',));
            }

            // modificar_formacion
            if (0 === strpos($pathinfo, '/modificar-formacion') && preg_match('#^/modificar\\-formacion(?P<id>[^/]++)/(?P<idF>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificar_formacion')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::modificarFormacionAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/mi')) {
            if (0 === strpos($pathinfo, '/mis-')) {
                // mis_ofertas_empresa
                if (0 === strpos($pathinfo, '/mis-ofertas/empresa') && preg_match('#^/mis\\-ofertas/empresa/(?P<idPerf>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mis_ofertas_empresa')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::listadoOfertasCompanyProfileAction',));
                }

                // mis_ofertas_candidato
                if (0 === strpos($pathinfo, '/mis-ofertas/candidato') && preg_match('#^/mis\\-ofertas/candidato/(?P<idPerf>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mis_ofertas_candidato')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::listadoOfertasProfileEstudianteAction',));
                }

                // school_list_applicant
                if ('/mis-alumnos/{$idSchool}' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SchoolController::listApplicantAction',  '_route' => 'school_list_applicant',);
                }

                // applicant_list_skill
                if (0 === strpos($pathinfo, '/mis-competencias') && preg_match('#^/mis\\-competencias/(?P<idApplicant>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_list_skill')), array (  '_controller' => 'AppBundle\\Controller\\SkillController::applicantSkillListAction',));
                }

            }

            // applicant_list_education
            if (0 === strpos($pathinfo, '/mi-formacion') && preg_match('#^/mi\\-formacion/(?P<idApplicant>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_list_education')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::applicantWorkListAction',));
            }

            // profile
            if (0 === strpos($pathinfo, '/mi-perfil') && preg_match('#^/mi\\-perfil/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexProfileAction',));
            }

        }

        // forgot_password
        if (0 === strpos($pathinfo, '/forgot-password') && preg_match('#^/forgot\\-password/(?P<mail>[^/]++)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'forgot_password')), array (  'mail' => 'null',  '_controller' => 'AppBundle\\Controller\\DefaultController::forgotPassword',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_forgot_password;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'forgot_password'));
            }

            return $ret;
        }
        not_forgot_password:

        // fulltext
        if (0 === strpos($pathinfo, '/fulltext') && preg_match('#^/fulltext(?:/(?P<type>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fulltext')), array (  'type' => '%',  '_controller' => 'AppBundle\\Controller\\ApplicantController::fullTextAction',));
        }

        if (0 === strpos($pathinfo, '/ver-')) {
            // check_alert
            if (0 === strpos($pathinfo, '/ver-alreta') && preg_match('#^/ver\\-alreta/(?P<idAlert>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'check_alert')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::checkAlertAction',));
            }

            // ver_mi_oferta
            if (0 === strpos($pathinfo, '/ver-mi-oferta') && preg_match('#^/ver\\-mi\\-oferta/(?P<id>[^/]++)/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ver_mi_oferta')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::verMiOferta',));
            }

            // ver_oferta
            if (0 === strpos($pathinfo, '/ver-oferta') && preg_match('#^/ver\\-oferta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ver_oferta')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::verOferta',));
            }

        }

        // validate_offer
        if (0 === strpos($pathinfo, '/validar-oferta') && preg_match('#^/validar\\-oferta/(?P<id>[^/]++)/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'validate_offer')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::validateOfferAction',));
        }

        // terms
        if ('/terminos' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::termsAction',  '_route' => 'terms',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/listado-')) {
                // school_list_education
                if (0 === strpos($pathinfo, '/listado-formacion') && preg_match('#^/listado\\-formacion/(?P<idSchool>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_list_education')), array (  '_controller' => 'AppBundle\\Controller\\EducationController::schoolEducationListAction',));
                }

                // listado_empresas
                if (0 === strpos($pathinfo, '/listado-empresas') && preg_match('#^/listado\\-empresas(?:/(?P<page>[^/]++)(?:/(?P<idUser>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listado_empresas')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::listadoEmpresasAction',  'page' => 1,  'idUser' => 'app.user.id',));
                }

                // listado_estudiantes
                if (0 === strpos($pathinfo, '/listado-estudiantes') && preg_match('#^/listado\\-estudiantes(?:/(?P<page>[^/]++)(?:/(?P<idUser>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listado_estudiantes')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::listadoEstudiantesAction',  'page' => 1,  'idUser' => 'app.user.id',));
                }

                // listado_ofertas
                if (0 === strpos($pathinfo, '/listado-ofertas') && preg_match('#^/listado\\-ofertas(?:/(?P<page>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listado_ofertas')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::listadoOfertasAction',  'page' => 1,));
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // homepage_login
                if ('/login' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\LoginController::loginAction',  '_route' => 'homepage_login',);
                }

                // login_check
                if ('/login_check' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\LoginController::login_checkAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\LoginController::logoutAction',  '_route' => 'logout',);
            }

        }

        elseif (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/eliminar-mi-')) {
                if (0 === strpos($pathinfo, '/eliminar-mi-formacion')) {
                    // school_delete_education
                    if (0 === strpos($pathinfo, '/eliminar-mi-formacion-centro') && preg_match('#^/eliminar\\-mi\\-formacion\\-centro/(?P<id>[^/]++)/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_delete_education')), array (  '_controller' => 'AppBundle\\Controller\\EducationController::educationSchoolDeleteAction',));
                    }

                    // applicant_delete_education
                    if (preg_match('#^/eliminar\\-mi\\-formacion/(?P<id>[^/]++)/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_delete_education')), array (  '_controller' => 'AppBundle\\Controller\\EducationController::educationDeleteAction',));
                    }

                }

                // applicant_delete_skill
                if (0 === strpos($pathinfo, '/eliminar-mi-skill') && preg_match('#^/eliminar\\-mi\\-skill/(?P<id>[^/]++)/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_delete_skill')), array (  '_controller' => 'AppBundle\\Controller\\SkillController::applicantDeleteSkillAction',));
                }

                // applicant_delete_workexp
                if (0 === strpos($pathinfo, '/eliminar-mi-experiencia') && preg_match('#^/eliminar\\-mi\\-experiencia/(?P<id>[^/]++)/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_delete_workexp')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::applicantDeleteWorkAction',));
                }

            }

            // sn_del
            if (0 === strpos($pathinfo, '/eliminar-red-social') && preg_match('#^/eliminar\\-red\\-social/(?P<idUser>[^/]++)/(?P<usRelationId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sn_del')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::snDeleteAction',));
            }

            if (0 === strpos($pathinfo, '/editar-')) {
                // applicant_add_education
                if (0 === strpos($pathinfo, '/editar-formacion-candidato') && preg_match('#^/editar\\-formacion\\-candidato/(?P<idApplicant>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_add_education')), array (  '_controller' => 'AppBundle\\Controller\\EducationController::applicantEducationAddAction',));
                }

                if (0 === strpos($pathinfo, '/editar-competencias-')) {
                    // applicant_add_skill
                    if (0 === strpos($pathinfo, '/editar-competencias-candidato') && preg_match('#^/editar\\-competencias\\-candidato/(?P<idApplicant>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_add_skill')), array (  '_controller' => 'AppBundle\\Controller\\SkillController::applicantSkillAddAction',));
                    }

                    // applicant_add_common_skill
                    if (0 === strpos($pathinfo, '/editar-competencias-comunes-candidato') && preg_match('#^/editar\\-competencias\\-comunes\\-candidato/(?P<idApplicant>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_add_common_skill')), array (  '_controller' => 'AppBundle\\Controller\\SkillController::applicantCommonSkillAddAction',));
                    }

                    // applicant_add_personal_skill
                    if (0 === strpos($pathinfo, '/editar-competencias-personales-candidato') && preg_match('#^/editar\\-competencias\\-personales\\-candidato/(?P<idApplicant>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_add_personal_skill')), array (  '_controller' => 'AppBundle\\Controller\\SkillController::applicantPersonalSkillAddAction',));
                    }

                }

                // avatar_edit
                if ('/editar-avatar' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::avatarEditAction',  '_route' => 'avatar_edit',);
                }

                // applicant_add_work
                if (0 === strpos($pathinfo, '/editar-experiencia-candidato') && preg_match('#^/editar\\-experiencia\\-candidato(?P<idApplicant>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_add_work')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::applicantWorkAddAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register-')) {
                // applicant_registration
                if ('/register-applicant' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RegisterController::registerApplicantAction',  '_route' => 'applicant_registration',);
                }

                // company_registration
                if ('/register-company' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RegisterController::registerCompanyAction',  '_route' => 'company_registration',);
                }

                // school_registration
                if ('/register-school' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RegisterController::registerSchoolAction',  '_route' => 'school_registration',);
                }

            }

            // discard_offer
            if (0 === strpos($pathinfo, '/rechazar-oferta') && preg_match('#^/rechazar\\-oferta/(?P<id>[^/]++)/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'discard_offer')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::discardOfferAction',));
            }

            // reset_pwd
            if (0 === strpos($pathinfo, '/reset-pwd') && preg_match('#^/reset\\-pwd/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reset_pwd')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::resetPwdAction',));
            }

            // sn_list
            if (0 === strpos($pathinfo, '/redes-sociales') && preg_match('#^/redes\\-sociales/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sn_list')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::snListAction',));
            }

        }

        // global_report
        if ('/global-report' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::globalReportsAction',  '_route' => 'global_report',);
        }

        // offer_admin
        if (0 === strpos($pathinfo, '/gestionar-oferta') && preg_match('#^/gestionar\\-oferta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_admin')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::offerAdminAction',));
        }

        // postular_oferta
        if (0 === strpos($pathinfo, '/postular') && preg_match('#^/postular/(?P<id>[^/]++)/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'postular_oferta')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::postularOferta',));
        }

        // publicProfile
        if (0 === strpos($pathinfo, '/perfil') && preg_match('#^/perfil/(?P<idUser>[^/]++)/(?P<idVisitor>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicProfile')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexPublicProfileAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // offerAdminAssign
            if (0 === strpos($pathinfo, '/asignar-oferta') && preg_match('#^/asignar\\-oferta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offerAdminAssign')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::offerAdminAssignAction',));
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // easyadmin
                if ('/admin' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_easyadmin;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'easyadmin'));
                    }

                    return $ret;
                }
                not_easyadmin:

                // admin
                if ('/admin' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin'));
                    }

                    return $ret;
                }
                not_admin:

            }

            // sn_add
            if (0 === strpos($pathinfo, '/agregar-red-social') && preg_match('#^/agregar\\-red\\-social/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sn_add')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::snAddAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/b')) {
            // offerAdminDelAssign
            if (0 === strpos($pathinfo, '/borrar-asignar-oferta') && preg_match('#^/borrar\\-asignar\\-oferta/(?P<idRel>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offerAdminDelAssign')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::offerAdminDelAssignAction',));
            }

            // deleteApplicant
            if (0 === strpos($pathinfo, '/borrar-aspirante') && preg_match('#^/borrar\\-aspirante/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteApplicant')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::applicantRejectAction',));
            }

            // applicant_search
            if (0 === strpos($pathinfo, '/buscar-estudiante') && preg_match('#^/buscar\\-estudiante(?:/(?P<page>[^/]++)(?:/(?P<idUser>[^/]++)(?:/(?P<parm1>[^/]++))?)?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_search')), array (  '_controller' => 'AppBundle\\Controller\\ApplicantController::applicantSearchAction',  'page' => 1,  'idUser' => 'id',  'parm1' => '',));
            }

            // offer_search
            if (0 === strpos($pathinfo, '/buscar-oferta') && preg_match('#^/buscar\\-oferta(?:/(?P<type>[^/]+)(?:(?P<fieldOne>[^/]++)(?:/(?P<fieldTwo>[^/]++))?)?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_search')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::offerSearchAction',  'fieldOne' => 'categoria',  'fieldTwo' => NULL,  'entity' => 'Ofertas',  'type' => '%',));
            }

        }

        // list_school_offer
        if (0 === strpos($pathinfo, '/ofertas-centro') && preg_match('#^/ofertas\\-centro/(?P<idProf>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_school_offer')), array (  '_controller' => 'AppBundle\\Controller\\OfferController::schoolOfferListAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // homepage_logged
        if (0 === strpos($pathinfo, '/home') && preg_match('#^/home/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage_logged')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::userIndexAction',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
