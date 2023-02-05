<?php

namespace App\Controller\Admin;

use App\Entity\Brand;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BrandCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Brand::class;
    }

    public function configureCrud(Crud $crud): crud
    {
        return $crud
            ->setPageTitle("index", "Brand administration")
            ->setPaginatorPageSize(25);
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('name')
        ];
    }
}
