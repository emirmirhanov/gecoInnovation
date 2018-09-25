<?php
/**
 * Created by Madetec-Solution.
 * Developer: Mirkhanov Z.S.
 */

namespace app\modules\admin\services;


use app\modules\admin\entities\Product;
use app\modules\admin\forms\ProductForm;
use app\modules\admin\repositories\ProductRepository;

/**
 * Class ProductManageService
 * @package app\modules\admin\services
 * @property ProductRepository $products
 */
class ProductManageService
{
    private $products;

    public function __construct(ProductRepository $productRepository)
    {
        $this->products = $productRepository;
    }

    /**
     * @param ProductForm $form
     * @return Product
     * @throws \DomainException
     */
    public function create(ProductForm $form): Product
    {
        $product = Product::create(
            $form->name,
            $form->category_id,
            $form->article,
            $form->price,
            $form->old_price,
            $form->params,
            $form->quantity
        );
        if (is_array($form->photos->files)) {
            foreach ($form->photos->files as $file) {
                $product->addPhoto($file);
            }
        }
        $this->products->save($product);
        return $product;
    }

    public function edit($id, ProductForm $form): void
    {

    }

    public function remove($id): void
    {
    }
}