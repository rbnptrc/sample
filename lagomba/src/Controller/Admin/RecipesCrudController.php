<?php

namespace App\Controller\Admin;

use App\Entity\Recipes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RecipesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Recipes::class;
    }

    /*
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->IdField::new('id')
            ->setTitle::new('title')
            ->setSteps::new('steps')
            ->TextEditorField::new('description')
        ;
    }
    */
}
