<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Atnd01;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class Atnd01Controller extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Atnd01(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('scode');
            $grid->column('atnd_type');
            $grid->column('atnd_at');
            $grid->column('hsa_id');
            $grid->column('created_user');
            $grid->column('updated_user');
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
        return Show::make($id, new Atnd01(), function (Show $show) {
            $show->field('id');
            $show->field('scode');
            $show->field('atnd_type');
            $show->field('atnd_at');
            $show->field('hsa_id');
            $show->field('created_user');
            $show->field('updated_user');
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
        return Form::make(new Atnd01(), function (Form $form) {
            $form->display('id');
            $form->text('scode');
            $form->text('atnd_type');
            $form->text('atnd_at');
            $form->text('hsa_id');
            $form->text('created_user');
            $form->text('updated_user');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
