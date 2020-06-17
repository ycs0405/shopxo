<?php
// +----------------------------------------------------------------------
// | ShopXO 国内领先企业级B2C免费开源电商系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011~2019 http://shopxo.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Devil
// +----------------------------------------------------------------------
namespace app\admin\form;

/**
 * 轮播动态表格
 * @author  Devil
 * @blog    http://gong.gg/
 * @version 1.0.0
 * @date    2020-06-18
 * @desc    description
 */
class Slide
{
    // 基础条件
    public $condition_base = [];

    /**
     * 入口
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2020-06-18
     * @desc    description
     * @param   [array]           $params [输入参数]
     */
    public function Run($params = [])
    {
        return [
            // 基础配置
            'base' => [
                'key_field'     => 'id',
                'status_field'  => 'is_enable',
                'is_search'     => 1,
                'search_url'    => MyUrl('admin/slide/index'),
                'is_delete'     => 1,
                'delete_url'    => MyUrl('admin/slide/delete'),
                'delete_key'    => 'ids',
            ],
            // 表单配置
            'form' => [
                [
                    'view_type'         => 'checkbox',
                    'is_checked'        => 0,
                    'checked_text'      => '反选',
                    'not_checked_text'  => '全选',
                    'align'             => 'center',
                    'width'             => 80,
                ],
                [
                    'label'         => '名称',
                    'view_type'     => 'field',
                    'view_key'      => 'name',
                    'search_config' => [
                        'form_type'         => 'input',
                        'where_type'        => 'like',
                    ],
                ],
                [
                    'label'         => '所属平台',
                    'view_type'     => 'field',
                    'view_key'      => 'platform_text',
                    'search_config' => [
                        'form_type'         => 'select',
                        'form_name'         => 'platform',
                        'where_type'        => 'in',
                        'data'              => lang('common_platform_type'),
                        'data_key'          => 'value',
                        'data_name'         => 'name',
                        'is_multiple'       => 1,
                    ],
                ],
                [
                    'label'         => '图片',
                    'view_type'     => 'module',
                    'view_key'      => 'slide/module/images',
                    'grid_size'     => 'sm',
                ],
                [
                    'label'         => '事件类型',
                    'view_type'     => 'field',
                    'view_key'      => 'event_type_text',
                    'search_config' => [
                        'form_type'         => 'select',
                        'form_name'         => 'event_type',
                        'where_type'        => 'in',
                        'data'              => lang('common_app_event_type'),
                        'data_key'          => 'value',
                        'data_name'         => 'name',
                        'is_multiple'       => 1,
                    ],
                ],
                [
                    'label'         => '事件值',
                    'view_type'     => 'field',
                    'view_key'      => 'event_value',
                    'search_config' => [
                        'form_type'         => 'input',
                        'where_type'        => 'like',
                    ],
                ],
                [
                    'label'         => '是否启用',
                    'view_type'     => 'status',
                    'view_key'      => 'is_enable',
                    'post_url'      => MyUrl('admin/slide/statusupdate'),
                    'is_form_su'    => 1,
                    'align'         => 'center',
                    'search_config' => [
                        'form_type'         => 'select',
                        'where_type'        => 'in',
                        'data'              => lang('common_is_enable_list'),
                        'data_key'          => 'id',
                        'data_name'         => 'name',
                        'is_multiple'       => 1,
                    ],
                ],
                [
                    'label'         => '排序',
                    'view_type'     => 'field',
                    'view_key'      => 'sort',
                ],
                [
                    'label'         => '创建时间',
                    'view_type'     => 'field',
                    'view_key'      => 'add_time',
                    'search_config' => [
                        'form_type'         => 'datetime',
                    ],
                ],
                [
                    'label'         => '更新时间',
                    'view_type'     => 'field',
                    'view_key'      => 'upd_time',
                    'search_config' => [
                        'form_type'         => 'datetime',
                    ],
                ],
                [
                    'label'         => '操作',
                    'view_type'     => 'operate',
                    'view_key'      => 'slide/module/operate',
                    'align'         => 'center',
                    'fixed'         => 'right',
                ],
            ],
        ];
    }
}
?>