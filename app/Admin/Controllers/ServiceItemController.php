<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\ServiceItem;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ServiceItemController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ServiceItem(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('sino');
            $grid->column('sinm');
            $grid->column('pay_prc');
            $grid->column('pay_per');
            $grid->column('pay_calc');
            $grid->column('pay_overtime');
            $grid->column('sitime');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new ServiceItem(), function (Show $show) {
            $show->field('id');
            $show->field('sino');
            $show->field('sinm');
            $show->field('pay_prc');
            $show->field('pay_per');
            $show->field('pay_calc');
            $show->field('pay_overtime');
            $show->field('sitime');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new ServiceItem(), function (Form $form) {
            $form->display('id');
            $form->text('sino');
            $form->text('sinm');
            $form->text('pay_prc');
            $form->text('pay_per');
            $form->text('pay_calc');
            $form->text('pay_overtime');
            $form->text('sitime');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
