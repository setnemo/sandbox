<?php

namespace Design\Structural\Composite;

class Spy
{
    public function execute()
    {
        $form = $this->getProductForm();
        $this->loadProductData($form);
        $this->renderProduct($form);
    }

    /**
     * Клиентский код получает удобный интерфейс для построения сложных древовидных
     * структур.
     */
    protected function getProductForm(): FormElement
    {
        $form = new Form('product', "Add product", "/product/add");
        $form->add(new Input('name', "Name", 'text'));
        $form->add(new Input('description', "Description", 'text'));

        $picture = new Fieldset('photo', "Product photo");
        $picture->add(new Input('caption', "Caption", 'text'));
        $picture->add(new Input('image', "Image", 'file'));
        $form->add($picture);

        return $form;
    }

    protected function loadProductData(FormElement $form)
    {
        $data = [
            'name' => 'Apple MacBook',
            'description' => 'A decent laptop',
            'photo' => [
                'caption' => 'Front photo',
                'image' => 'photo1.png',
            ],
        ];

        $form->setData($data);
    }

    protected function renderProduct(FormElement $form)
    {
        echo $form->render();
    }
}
