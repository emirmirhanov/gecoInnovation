<?php
/**
 * Created by Madetec-Solution.
 * Developer: Mirkhanov Z.S.
 */

namespace app\modules\admin\forms;

/**
 * @package app\modules\admin\forms
 * @property PhotosForm $photos
 * @property CategoriesForm $categories
 */
class ProductForm extends CompositeForm
{
    public $name;
    public $article;
    public $price;
    public $old_price;
    public $params;
    public $quantity;

    public function __construct(array $config = [])
    {
        $this->photos = new PhotosForm();
        $this->categories = new CategoriesForm();
        parent::__construct($config);
    }

    public function rules(): array
    {
        return [
            [['name','article'],'string'],
            [['price','old_price'],'double'],
            [['params'],'string'],
            [['quantity'],'integer'],
        ];
    }


    protected function internalForms(): array
    {
        return ['photos','categories'];
    }
}