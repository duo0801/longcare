<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Rec01;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class Rec01Controller extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Rec01(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('scode');
            $grid->column('recnm');
            $grid->column('rec_gender');
            $grid->column('birth_date');
            $grid->column('idcard');
            $grid->column('tel');
            $grid->column('addr');
            $grid->column('updated_user');
            $grid->column('bknm');
            $grid->column('bkno');
            $grid->column('bkacc');
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
        return Show::make($id, new Rec01(), function (Show $show) {
            $show->field('id');
            $show->field('scode');
            $show->field('recnm');
            $show->field('rec_gender');
            $show->field('birth_date');
            $show->field('idcard');
            $show->field('tel');
            $show->field('addr');
            $show->field('updated_user');
            $show->field('bknm');
            $show->field('bkno');
            $show->field('bkacc');
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
        return Form::make(new Rec01(), function (Form $form) {
            $form->display('id');
            $form->text('scode');
            $form->text('recnm');
            $form->text('rec_gender');
            $form->text('birth_date');
            $form->text('idcard');
            $form->text('tel');
            $form->text('addr');
            $form->text('updated_user');
            $form->text('bknm');
            $form->text('bkno');
            $form->text('bkacc');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
