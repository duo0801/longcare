<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Case01;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class Case01Controller extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Case01(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('scode');
            $grid->column('caseno');
            $grid->column('casenm');
            $grid->column('case_gender');
            $grid->column('idcard');
            $grid->column('birth_date');
            $grid->column('cms');
            $grid->column('disability');
            $grid->column('boon');
            $grid->column('alone_flg');
            $grid->column('application_source');
            $grid->column('application_other');
            $grid->column('closed_source');
            $grid->column('closed_other');
            $grid->column('application_date');
            $grid->column('closed_date');
            $grid->column('assess_flg');
            $grid->column('assess_date');
            $grid->column('authorize_date');
            $grid->column('reside_city');
            $grid->column('reside_dist');
            $grid->column('reside_vil');
            $grid->column('reside_addr');
            $grid->column('tel');
            $grid->column('census_city');
            $grid->column('census_dist');
            $grid->column('census_vil');
            $grid->column('census_addr');
            $grid->column('care_center');
            $grid->column('caregiver');
            $grid->column('affiliation');
            $grid->column('dis_flg1');
            $grid->column('dis_flg2');
            $grid->column('dis_flg3');
            $grid->column('dis_flg4');
            $grid->column('dis_flg5');
            $grid->column('dis_flg6');
            $grid->column('created_user');
            $grid->column('created_user');
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
        return Show::make($id, new Case01(), function (Show $show) {
            $show->field('id');
            $show->field('scode');
            $show->field('caseno');
            $show->field('casenm');
            $show->field('case_gender');
            $show->field('idcard');
            $show->field('birth_date');
            $show->field('cms');
            $show->field('disability');
            $show->field('boon');
            $show->field('alone_flg');
            $show->field('application_source');
            $show->field('application_other');
            $show->field('closed_source');
            $show->field('closed_other');
            $show->field('application_date');
            $show->field('closed_date');
            $show->field('assess_flg');
            $show->field('assess_date');
            $show->field('authorize_date');
            $show->field('reside_city');
            $show->field('reside_dist');
            $show->field('reside_vil');
            $show->field('reside_addr');
            $show->field('tel');
            $show->field('census_city');
            $show->field('census_dist');
            $show->field('census_vil');
            $show->field('census_addr');
            $show->field('care_center');
            $show->field('caregiver');
            $show->field('affiliation');
            $show->field('dis_flg1');
            $show->field('dis_flg2');
            $show->field('dis_flg3');
            $show->field('dis_flg4');
            $show->field('dis_flg5');
            $show->field('dis_flg6');
            $show->field('created_user');
            $show->field('created_user');
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
        return Form::make(new Case01(), function (Form $form) {
            $form->display('id');
            $form->text('scode');
            $form->text('caseno');
            $form->text('casenm');
            $form->text('case_gender');
            $form->text('idcard');
            $form->text('birth_date');
            $form->text('cms');
            $form->text('disability');
            $form->text('boon');
            $form->text('alone_flg');
            $form->text('application_source');
            $form->text('application_other');
            $form->text('closed_source');
            $form->text('closed_other');
            $form->text('application_date');
            $form->text('closed_date');
            $form->text('assess_flg');
            $form->text('assess_date');
            $form->text('authorize_date');
            $form->text('reside_city');
            $form->text('reside_dist');
            $form->text('reside_vil');
            $form->text('reside_addr');
            $form->text('tel');
            $form->text('census_city');
            $form->text('census_dist');
            $form->text('census_vil');
            $form->text('census_addr');
            $form->text('care_center');
            $form->text('caregiver');
            $form->text('affiliation');
            $form->text('dis_flg1');
            $form->text('dis_flg2');
            $form->text('dis_flg3');
            $form->text('dis_flg4');
            $form->text('dis_flg5');
            $form->text('dis_flg6');
            $form->text('created_user');
            $form->text('created_user');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
