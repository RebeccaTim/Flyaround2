<?php

namespace WCS\CoavBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class PlaneModelAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('model')
            ->add('manufacturer')
            ->add('cruiseSpeed')
            ->add('nbSeats')
            ->add('status')
            ->add('planes')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('model')
            ->add('manufacturer')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('model')
            ->add('manufacturer')
            ->add('cruiseSpeed')
            ->add('nbSeats')
            ->add('status')
            ->add('planes')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('model')
            ->add('manufacturer')
            ->add('cruiseSpeed')
            ->add('nbSeats')
            ->add('status')
            ->add('planes')
        ;
    }
}