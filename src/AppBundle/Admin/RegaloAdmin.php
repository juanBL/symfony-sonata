<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class RegaloAdmin extends Admin
{

    protected $baseRouteName = 'regalo';

    protected $baseRoutePattern = 'regalo';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('sendEmail', $this->getRouterIdParameter().'/send-email');
    }

    public function getBatchActions()
    {
        $actions = parent::getBatchActions();

        if ($this->hasRoute('edit') && $this->isGranted('EDIT')) {
            $actions['send_email'] = [
                'label'            => 'Send email',
                'ask_confirmation' => false,
                ];
        }

        return $actions;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Regalo', array('class' => 'col-md-6'))
                ->add('nombre')
                ->add('precio')
                ->add('descripcion')
                ->add('estado')
            ->end()    
            ->with('Participantes', array('class' => 'col-md-6'))
                ->add('destinatario', 'entity', array(
                    'class' => 'AppBundle\Entity\Destinatario', 'required' => false, 'placeholder' => 'Elige un destinatario', 'choice_label' => 'nombreCompleto'))
                ->add('comprador', null, array(
                    'class' => 'AppBundle\Entity\Comprador', 'required' => false, 'placeholder' => 'Elige un comprador', 'choice_label' => 'nombreCompleto'))
            ->end()    
            ->with('Establecimientos', array('class' => 'col-md-6'))
                ->add('tiendas', 'sonata_type_model', array(
                    'by_reference' => false,
                    'expanded' => true,
                    'multiple' => true,
                    'label' => 'Tiendas')
                )
            ->end()    
            ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('precio')
            ->add('miFiltro', 'doctrine_orm_callback',
array(
                'callback' => function($queryBuilder, $alias, $field, $value) {
                    if (!$value['value']) {
                        return;
                    }

                    $queryBuilder->andWhere($alias.'.estado != :estado');
                    $queryBuilder->setParameter('estado', 'entregado');

                    return true;
                },
                    'field_type' => 'checkbox',
                    'label' => 'No entregados'
            ))            
            ->add('destinatario', null, array(), 'entity', array(
                'class' => 'AppBundle\Entity\Destinatario', 'choice_label' => 'nombreCompleto'))
            ->add('comprador', null, array(), 'entity', array(
                'class' => 'AppBundle\Entity\Comprador', 'choice_label' => 'nombreCompleto'))
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombre')
            ->add('precio', 'currency', array('currency' => 'EUR'))
            ->add('descripcion', null, array('label' => 'Descripción'))
            ->add('destinatario.nombreCompleto', null, array('label' => 'Destinatario'))
            ->add('comprador.nombreCompleto', null, array('label' => 'Comprador'))
            ->add('estado', 'string', array('template' => ':Admin:field_estado.html.twig'))
            ->add('miField', 'string', array('template' => ':Admin:field_envio_email.html.twig'))
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper    
            ->add('nombre')
            ->add('precio', 'currency', array('currency' => 'EUR'))
            ->add('descripcion', null, array('label' => 'Descripción'))
            ->add('destinatario.nombreCompleto', null, array('label' => 'Destinatario'))
            ->add('comprador.nombreCompleto', null, array('label' => 'Comprador'))
            ;
    }

    public function createQuery($context = 'list')
    {
        $query = parent::createQuery($context);
        $rootAlias = $query->getRootAliases()[0];
        $query
            ->andWhere(
                $query->expr()->eq($rootAlias.'.entregado', ':entregado')
            )            
            ;
        
        $query->setParameter('entregado', false);

        return $query;
    }
    
}
