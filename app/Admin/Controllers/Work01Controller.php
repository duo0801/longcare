<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Work01;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class Work01Controller extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Work01(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('scode');
            $grid->column('workno');
            $grid->column('case_id');
            $grid->column('hsa_id');
            $grid->column('sino');
            $grid->column('sinm');
            $grid->column('pay_prc');
            $grid->column('pay_per');
            $grid->column('pay_calc');
            $grid->column('pay_overtime');
            $grid->column('sitime');
            $grid->column('work_date');
            $grid->column('work_on_at');
            $grid->column('work_off_at');
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
        return Show::make($id, new Work01(), function (Show $show) {
            $show->field('id');
            $show->field('scode');
            $show->field('workno');
            $show->field('case_id');
            $show->field('hsa_id');
            $show->field('sino');
            $show->field('sinm');
            $show->field('pay_prc');
            $show->field('pay_per');
            $show->field('pay_calc');
            $show->field('pay_overtime');
            $show->field('sitime');
            $show->field('work_date');
            $show->field('work_on_at');
            $show->field('work_off_at');
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
        return Form::make(new Work01(), function (Form $form) {
            $form->display('id');
            $form->text('scode');
            $form->text('workno');
            $form->text('case_id');
            $form->text('hsa_id');
            $form->text('sino');
            $form->text('sinm');
            $form->text('pay_prc');
            $form->text('pay_per');
            $form->text('pay_calc');
            $form->text('pay_overtime');
            $form->text('sitime');
            $form->text('work_date');
            $form->text('work_on_at');
            $form->text('work_off_at');
            $form->text('created_user');
            $form->text('updated_user');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
