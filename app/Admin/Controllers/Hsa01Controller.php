<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Hsa01;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class Hsa01Controller extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Hsa01(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('scode');
            $grid->column('hsa_rank');
            $grid->column('hsanm');
            $grid->column('hsa_gender');
            $grid->column('census');
            $grid->column('lc_account');
            $grid->column('birth_date');
            $grid->column('idcard');
            $grid->column('arrival_date');
            $grid->column('effective_date');
            $grid->column('expiry_date');
            $grid->column('hsa_tel');
            $grid->column('hsa_addr');
            $grid->column('fam_handicp');
            $grid->column('fam_nih');
            $grid->column('rec_id');
            $grid->column('lic_flg1');
            $grid->column('lic_flg1_expiry_date');
            $grid->column('lic_flg2');
            $grid->column('lic_flg2_expiry_date');
            $grid->column('lic_flg3');
            $grid->column('lic_flg3_expiry_date');
            $grid->column('lic_flg4');
            $grid->column('lic_flg4_expiry_date');
            $grid->column('lic_flg5');
            $grid->column('lic_flg5_expiry_date');
            $grid->column('lic_flg6');
            $grid->column('lic_flg6_expiry_date');
            $grid->column('lic_flg7');
            $grid->column('lic_flg7_expiry_date');
            $grid->column('hsa_account');
            $grid->column('lack_bonus');
            $grid->column('icenm');
            $grid->column('icetel');
            $grid->column('remark');
            $grid->column('education');
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
        return Show::make($id, new Hsa01(), function (Show $show) {
            $show->field('id');
            $show->field('scode');
            $show->field('hsa_rank');
            $show->field('hsanm');
            $show->field('hsa_gender');
            $show->field('census');
            $show->field('lc_account');
            $show->field('birth_date');
            $show->field('idcard');
            $show->field('arrival_date');
            $show->field('effective_date');
            $show->field('expiry_date');
            $show->field('hsa_tel');
            $show->field('hsa_addr');
            $show->field('fam_handicp');
            $show->field('fam_nih');
            $show->field('rec_id');
            $show->field('lic_flg1');
            $show->field('lic_flg1_expiry_date');
            $show->field('lic_flg2');
            $show->field('lic_flg2_expiry_date');
            $show->field('lic_flg3');
            $show->field('lic_flg3_expiry_date');
            $show->field('lic_flg4');
            $show->field('lic_flg4_expiry_date');
            $show->field('lic_flg5');
            $show->field('lic_flg5_expiry_date');
            $show->field('lic_flg6');
            $show->field('lic_flg6_expiry_date');
            $show->field('lic_flg7');
            $show->field('lic_flg7_expiry_date');
            $show->field('hsa_account');
            $show->field('lack_bonus');
            $show->field('icenm');
            $show->field('icetel');
            $show->field('remark');
            $show->field('education');
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
        return Form::make(new Hsa01(), function (Form $form) {
            $form->display('id');
            $form->text('scode');
            $form->text('hsa_rank');
            $form->text('hsanm');
            $form->text('hsa_gender');
            $form->text('census');
            $form->text('lc_account');
            $form->text('birth_date');
            $form->text('idcard');
            $form->text('arrival_date');
            $form->text('effective_date');
            $form->text('expiry_date');
            $form->text('hsa_tel');
            $form->text('hsa_addr');
            $form->text('fam_handicp');
            $form->text('fam_nih');
            $form->text('rec_id');
            $form->text('lic_flg1');
            $form->text('lic_flg1_expiry_date');
            $form->text('lic_flg2');
            $form->text('lic_flg2_expiry_date');
            $form->text('lic_flg3');
            $form->text('lic_flg3_expiry_date');
            $form->text('lic_flg4');
            $form->text('lic_flg4_expiry_date');
            $form->text('lic_flg5');
            $form->text('lic_flg5_expiry_date');
            $form->text('lic_flg6');
            $form->text('lic_flg6_expiry_date');
            $form->text('lic_flg7');
            $form->text('lic_flg7_expiry_date');
            $form->text('hsa_account');
            $form->text('lack_bonus');
            $form->text('icenm');
            $form->text('icetel');
            $form->text('remark');
            $form->text('education');
            $form->text('created_user');
            $form->text('updated_user');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
