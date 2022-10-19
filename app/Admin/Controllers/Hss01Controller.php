<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Hss01;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class Hss01Controller extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Hss01(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('scode');
            $grid->column('hss_rank');
            $grid->column('hssnm');
            $grid->column('hss_gender');
            $grid->column('lc_account');
            $grid->column('birth_date');
            $grid->column('idcard');
            $grid->column('arrival_date');
            $grid->column('effective_date');
            $grid->column('expiry_date');
            $grid->column('hss_tel');
            $grid->column('hss_addr');
            $grid->column('fam_handicp');
            $grid->column('fam_nih');
            $grid->column('lic_flg1');
            $grid->column('lic_flg1_expiry_date');
            $grid->column('lic_flg2');
            $grid->column('lic_flg2_expiry_date');
            $grid->column('lic_flg3');
            $grid->column('lic_flg3_expiry_date');
            $grid->column('lic_flg4');
            $grid->column('lic_flg4_expiry_date');
            $grid->column('icenm');
            $grid->column('lcetel');
            $grid->column('trng_flg1');
            $grid->column('trng_flg2');
            $grid->column('trng_flg3');
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
        return Show::make($id, new Hss01(), function (Show $show) {
            $show->field('id');
            $show->field('scode');
            $show->field('hss_rank');
            $show->field('hssnm');
            $show->field('hss_gender');
            $show->field('lc_account');
            $show->field('birth_date');
            $show->field('idcard');
            $show->field('arrival_date');
            $show->field('effective_date');
            $show->field('expiry_date');
            $show->field('hss_tel');
            $show->field('hss_addr');
            $show->field('fam_handicp');
            $show->field('fam_nih');
            $show->field('lic_flg1');
            $show->field('lic_flg1_expiry_date');
            $show->field('lic_flg2');
            $show->field('lic_flg2_expiry_date');
            $show->field('lic_flg3');
            $show->field('lic_flg3_expiry_date');
            $show->field('lic_flg4');
            $show->field('lic_flg4_expiry_date');
            $show->field('icenm');
            $show->field('lcetel');
            $show->field('trng_flg1');
            $show->field('trng_flg2');
            $show->field('trng_flg3');
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
        return Form::make(new Hss01(), function (Form $form) {
            $form->display('id');
            $form->text('scode');
            $form->text('hss_rank');
            $form->text('hssnm');
            $form->text('hss_gender');
            $form->text('lc_account');
            $form->text('birth_date');
            $form->text('idcard');
            $form->text('arrival_date');
            $form->text('effective_date');
            $form->text('expiry_date');
            $form->text('hss_tel');
            $form->text('hss_addr');
            $form->text('fam_handicp');
            $form->text('fam_nih');
            $form->text('lic_flg1');
            $form->text('lic_flg1_expiry_date');
            $form->text('lic_flg2');
            $form->text('lic_flg2_expiry_date');
            $form->text('lic_flg3');
            $form->text('lic_flg3_expiry_date');
            $form->text('lic_flg4');
            $form->text('lic_flg4_expiry_date');
            $form->text('icenm');
            $form->text('lcetel');
            $form->text('trng_flg1');
            $form->text('trng_flg2');
            $form->text('trng_flg3');
            $form->text('created_user');
            $form->text('updated_user');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
