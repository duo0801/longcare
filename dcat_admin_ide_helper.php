<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection affiliation
     * @property Grid\Column|Collection alone_flg
     * @property Grid\Column|Collection application_date
     * @property Grid\Column|Collection application_other
     * @property Grid\Column|Collection application_source
     * @property Grid\Column|Collection assess_date
     * @property Grid\Column|Collection assess_flg
     * @property Grid\Column|Collection authorize_date
     * @property Grid\Column|Collection birth_date
     * @property Grid\Column|Collection boon
     * @property Grid\Column|Collection care_center
     * @property Grid\Column|Collection caregiver
     * @property Grid\Column|Collection case_gender
     * @property Grid\Column|Collection casenm
     * @property Grid\Column|Collection caseno
     * @property Grid\Column|Collection census_addr
     * @property Grid\Column|Collection census_city
     * @property Grid\Column|Collection census_dist
     * @property Grid\Column|Collection census_vil
     * @property Grid\Column|Collection closed_date
     * @property Grid\Column|Collection closed_other
     * @property Grid\Column|Collection closed_source
     * @property Grid\Column|Collection cms
     * @property Grid\Column|Collection created_user
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection dis_flg1
     * @property Grid\Column|Collection dis_flg2
     * @property Grid\Column|Collection dis_flg3
     * @property Grid\Column|Collection dis_flg4
     * @property Grid\Column|Collection dis_flg5
     * @property Grid\Column|Collection dis_flg6
     * @property Grid\Column|Collection disability
     * @property Grid\Column|Collection idcard
     * @property Grid\Column|Collection reside_addr
     * @property Grid\Column|Collection reside_city
     * @property Grid\Column|Collection reside_dist
     * @property Grid\Column|Collection reside_vil
     * @property Grid\Column|Collection scode
     * @property Grid\Column|Collection tel
     * @property Grid\Column|Collection updated_user
     * @property Grid\Column|Collection case_id
     * @property Grid\Column|Collection sino
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection arrival_date
     * @property Grid\Column|Collection effective_date
     * @property Grid\Column|Collection expiry_date
     * @property Grid\Column|Collection fam_handicp
     * @property Grid\Column|Collection fam_nih
     * @property Grid\Column|Collection hss_addr
     * @property Grid\Column|Collection hss_gender
     * @property Grid\Column|Collection hss_rank
     * @property Grid\Column|Collection hss_tel
     * @property Grid\Column|Collection hssnm
     * @property Grid\Column|Collection icenm
     * @property Grid\Column|Collection lc_account
     * @property Grid\Column|Collection lcetel
     * @property Grid\Column|Collection lic_flg1
     * @property Grid\Column|Collection lic_flg1_expiry_date
     * @property Grid\Column|Collection lic_flg2
     * @property Grid\Column|Collection lic_flg2_expiry_date
     * @property Grid\Column|Collection lic_flg3
     * @property Grid\Column|Collection lic_flg3_expiry_date
     * @property Grid\Column|Collection lic_flg4
     * @property Grid\Column|Collection lic_flg4_expiry_date
     * @property Grid\Column|Collection trng_flg1
     * @property Grid\Column|Collection trng_flg2
     * @property Grid\Column|Collection trng_flg3
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection expires_at
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection email_verified_at
     *
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection affiliation(string $label = null)
     * @method Grid\Column|Collection alone_flg(string $label = null)
     * @method Grid\Column|Collection application_date(string $label = null)
     * @method Grid\Column|Collection application_other(string $label = null)
     * @method Grid\Column|Collection application_source(string $label = null)
     * @method Grid\Column|Collection assess_date(string $label = null)
     * @method Grid\Column|Collection assess_flg(string $label = null)
     * @method Grid\Column|Collection authorize_date(string $label = null)
     * @method Grid\Column|Collection birth_date(string $label = null)
     * @method Grid\Column|Collection boon(string $label = null)
     * @method Grid\Column|Collection care_center(string $label = null)
     * @method Grid\Column|Collection caregiver(string $label = null)
     * @method Grid\Column|Collection case_gender(string $label = null)
     * @method Grid\Column|Collection casenm(string $label = null)
     * @method Grid\Column|Collection caseno(string $label = null)
     * @method Grid\Column|Collection census_addr(string $label = null)
     * @method Grid\Column|Collection census_city(string $label = null)
     * @method Grid\Column|Collection census_dist(string $label = null)
     * @method Grid\Column|Collection census_vil(string $label = null)
     * @method Grid\Column|Collection closed_date(string $label = null)
     * @method Grid\Column|Collection closed_other(string $label = null)
     * @method Grid\Column|Collection closed_source(string $label = null)
     * @method Grid\Column|Collection cms(string $label = null)
     * @method Grid\Column|Collection created_user(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection dis_flg1(string $label = null)
     * @method Grid\Column|Collection dis_flg2(string $label = null)
     * @method Grid\Column|Collection dis_flg3(string $label = null)
     * @method Grid\Column|Collection dis_flg4(string $label = null)
     * @method Grid\Column|Collection dis_flg5(string $label = null)
     * @method Grid\Column|Collection dis_flg6(string $label = null)
     * @method Grid\Column|Collection disability(string $label = null)
     * @method Grid\Column|Collection idcard(string $label = null)
     * @method Grid\Column|Collection reside_addr(string $label = null)
     * @method Grid\Column|Collection reside_city(string $label = null)
     * @method Grid\Column|Collection reside_dist(string $label = null)
     * @method Grid\Column|Collection reside_vil(string $label = null)
     * @method Grid\Column|Collection scode(string $label = null)
     * @method Grid\Column|Collection tel(string $label = null)
     * @method Grid\Column|Collection updated_user(string $label = null)
     * @method Grid\Column|Collection case_id(string $label = null)
     * @method Grid\Column|Collection sino(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection arrival_date(string $label = null)
     * @method Grid\Column|Collection effective_date(string $label = null)
     * @method Grid\Column|Collection expiry_date(string $label = null)
     * @method Grid\Column|Collection fam_handicp(string $label = null)
     * @method Grid\Column|Collection fam_nih(string $label = null)
     * @method Grid\Column|Collection hss_addr(string $label = null)
     * @method Grid\Column|Collection hss_gender(string $label = null)
     * @method Grid\Column|Collection hss_rank(string $label = null)
     * @method Grid\Column|Collection hss_tel(string $label = null)
     * @method Grid\Column|Collection hssnm(string $label = null)
     * @method Grid\Column|Collection icenm(string $label = null)
     * @method Grid\Column|Collection lc_account(string $label = null)
     * @method Grid\Column|Collection lcetel(string $label = null)
     * @method Grid\Column|Collection lic_flg1(string $label = null)
     * @method Grid\Column|Collection lic_flg1_expiry_date(string $label = null)
     * @method Grid\Column|Collection lic_flg2(string $label = null)
     * @method Grid\Column|Collection lic_flg2_expiry_date(string $label = null)
     * @method Grid\Column|Collection lic_flg3(string $label = null)
     * @method Grid\Column|Collection lic_flg3_expiry_date(string $label = null)
     * @method Grid\Column|Collection lic_flg4(string $label = null)
     * @method Grid\Column|Collection lic_flg4_expiry_date(string $label = null)
     * @method Grid\Column|Collection trng_flg1(string $label = null)
     * @method Grid\Column|Collection trng_flg2(string $label = null)
     * @method Grid\Column|Collection trng_flg3(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection expires_at(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection version
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection order
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection username
     * @property Show\Field|Collection affiliation
     * @property Show\Field|Collection alone_flg
     * @property Show\Field|Collection application_date
     * @property Show\Field|Collection application_other
     * @property Show\Field|Collection application_source
     * @property Show\Field|Collection assess_date
     * @property Show\Field|Collection assess_flg
     * @property Show\Field|Collection authorize_date
     * @property Show\Field|Collection birth_date
     * @property Show\Field|Collection boon
     * @property Show\Field|Collection care_center
     * @property Show\Field|Collection caregiver
     * @property Show\Field|Collection case_gender
     * @property Show\Field|Collection casenm
     * @property Show\Field|Collection caseno
     * @property Show\Field|Collection census_addr
     * @property Show\Field|Collection census_city
     * @property Show\Field|Collection census_dist
     * @property Show\Field|Collection census_vil
     * @property Show\Field|Collection closed_date
     * @property Show\Field|Collection closed_other
     * @property Show\Field|Collection closed_source
     * @property Show\Field|Collection cms
     * @property Show\Field|Collection created_user
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection dis_flg1
     * @property Show\Field|Collection dis_flg2
     * @property Show\Field|Collection dis_flg3
     * @property Show\Field|Collection dis_flg4
     * @property Show\Field|Collection dis_flg5
     * @property Show\Field|Collection dis_flg6
     * @property Show\Field|Collection disability
     * @property Show\Field|Collection idcard
     * @property Show\Field|Collection reside_addr
     * @property Show\Field|Collection reside_city
     * @property Show\Field|Collection reside_dist
     * @property Show\Field|Collection reside_vil
     * @property Show\Field|Collection scode
     * @property Show\Field|Collection tel
     * @property Show\Field|Collection updated_user
     * @property Show\Field|Collection case_id
     * @property Show\Field|Collection sino
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection arrival_date
     * @property Show\Field|Collection effective_date
     * @property Show\Field|Collection expiry_date
     * @property Show\Field|Collection fam_handicp
     * @property Show\Field|Collection fam_nih
     * @property Show\Field|Collection hss_addr
     * @property Show\Field|Collection hss_gender
     * @property Show\Field|Collection hss_rank
     * @property Show\Field|Collection hss_tel
     * @property Show\Field|Collection hssnm
     * @property Show\Field|Collection icenm
     * @property Show\Field|Collection lc_account
     * @property Show\Field|Collection lcetel
     * @property Show\Field|Collection lic_flg1
     * @property Show\Field|Collection lic_flg1_expiry_date
     * @property Show\Field|Collection lic_flg2
     * @property Show\Field|Collection lic_flg2_expiry_date
     * @property Show\Field|Collection lic_flg3
     * @property Show\Field|Collection lic_flg3_expiry_date
     * @property Show\Field|Collection lic_flg4
     * @property Show\Field|Collection lic_flg4_expiry_date
     * @property Show\Field|Collection trng_flg1
     * @property Show\Field|Collection trng_flg2
     * @property Show\Field|Collection trng_flg3
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection expires_at
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection email_verified_at
     *
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection affiliation(string $label = null)
     * @method Show\Field|Collection alone_flg(string $label = null)
     * @method Show\Field|Collection application_date(string $label = null)
     * @method Show\Field|Collection application_other(string $label = null)
     * @method Show\Field|Collection application_source(string $label = null)
     * @method Show\Field|Collection assess_date(string $label = null)
     * @method Show\Field|Collection assess_flg(string $label = null)
     * @method Show\Field|Collection authorize_date(string $label = null)
     * @method Show\Field|Collection birth_date(string $label = null)
     * @method Show\Field|Collection boon(string $label = null)
     * @method Show\Field|Collection care_center(string $label = null)
     * @method Show\Field|Collection caregiver(string $label = null)
     * @method Show\Field|Collection case_gender(string $label = null)
     * @method Show\Field|Collection casenm(string $label = null)
     * @method Show\Field|Collection caseno(string $label = null)
     * @method Show\Field|Collection census_addr(string $label = null)
     * @method Show\Field|Collection census_city(string $label = null)
     * @method Show\Field|Collection census_dist(string $label = null)
     * @method Show\Field|Collection census_vil(string $label = null)
     * @method Show\Field|Collection closed_date(string $label = null)
     * @method Show\Field|Collection closed_other(string $label = null)
     * @method Show\Field|Collection closed_source(string $label = null)
     * @method Show\Field|Collection cms(string $label = null)
     * @method Show\Field|Collection created_user(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection dis_flg1(string $label = null)
     * @method Show\Field|Collection dis_flg2(string $label = null)
     * @method Show\Field|Collection dis_flg3(string $label = null)
     * @method Show\Field|Collection dis_flg4(string $label = null)
     * @method Show\Field|Collection dis_flg5(string $label = null)
     * @method Show\Field|Collection dis_flg6(string $label = null)
     * @method Show\Field|Collection disability(string $label = null)
     * @method Show\Field|Collection idcard(string $label = null)
     * @method Show\Field|Collection reside_addr(string $label = null)
     * @method Show\Field|Collection reside_city(string $label = null)
     * @method Show\Field|Collection reside_dist(string $label = null)
     * @method Show\Field|Collection reside_vil(string $label = null)
     * @method Show\Field|Collection scode(string $label = null)
     * @method Show\Field|Collection tel(string $label = null)
     * @method Show\Field|Collection updated_user(string $label = null)
     * @method Show\Field|Collection case_id(string $label = null)
     * @method Show\Field|Collection sino(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection arrival_date(string $label = null)
     * @method Show\Field|Collection effective_date(string $label = null)
     * @method Show\Field|Collection expiry_date(string $label = null)
     * @method Show\Field|Collection fam_handicp(string $label = null)
     * @method Show\Field|Collection fam_nih(string $label = null)
     * @method Show\Field|Collection hss_addr(string $label = null)
     * @method Show\Field|Collection hss_gender(string $label = null)
     * @method Show\Field|Collection hss_rank(string $label = null)
     * @method Show\Field|Collection hss_tel(string $label = null)
     * @method Show\Field|Collection hssnm(string $label = null)
     * @method Show\Field|Collection icenm(string $label = null)
     * @method Show\Field|Collection lc_account(string $label = null)
     * @method Show\Field|Collection lcetel(string $label = null)
     * @method Show\Field|Collection lic_flg1(string $label = null)
     * @method Show\Field|Collection lic_flg1_expiry_date(string $label = null)
     * @method Show\Field|Collection lic_flg2(string $label = null)
     * @method Show\Field|Collection lic_flg2_expiry_date(string $label = null)
     * @method Show\Field|Collection lic_flg3(string $label = null)
     * @method Show\Field|Collection lic_flg3_expiry_date(string $label = null)
     * @method Show\Field|Collection lic_flg4(string $label = null)
     * @method Show\Field|Collection lic_flg4_expiry_date(string $label = null)
     * @method Show\Field|Collection trng_flg1(string $label = null)
     * @method Show\Field|Collection trng_flg2(string $label = null)
     * @method Show\Field|Collection trng_flg3(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection expires_at(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
