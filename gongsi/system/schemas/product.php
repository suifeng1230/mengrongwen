<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: product.php 5402 2014-06-03 10:17:57Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'product_id' => 
  array (
    'field' => 'product_id',
    'label' => 'ID',
    'pk' => true,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'title' => 
  array (
    'field' => 'title',
    'label' => '标题',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'name' => 
  array (
    'field' => 'name',
    'label' => '名称',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),  
  'shop_id' => 
  array (
    'field' => 'shop_id',
    'label' => '店铺',
    'pk' => false,
    'add' => true,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'shop',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'cat_id' => 
  array (
    'field' => 'cat_id',
    'label' => '商品分类',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'vcat_id' => 
  array (
    'field' => 'vcat_id',
    'label' => '店铺分类',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'brand_id' => 
  array (
    'field' => 'brand_id',
    'label' => '品牌',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'city_id' => 
  array (
    'field' => 'city_id',
    'label' => '城市',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'city',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'area_id' => 
  array (
    'field' => 'area_id',
    'label' => '地区',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'area',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'market_price' => 
  array (
    'field' => 'market_price',
    'label' => '市场价',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'number',
    'comment' => '',
    'default' => '0.00',
    'SO' => false,
  ),
  'price' => 
  array (
    'field' => 'price',
    'label' => '商铺价',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '0.00',
    'SO' => false,
  ),
 'danwei' => 
  array (
    'field' => 'danwei',
    'label' => '单位',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'freight' => 
  array (
    'field' => 'freight',
    'label' => '运费',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'photo' => 
  array (
    'field' => 'photo',
    'label' => '封面',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'photo',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'photos' => 
  array (
    'field' => 'photos',
    'label' => '图片数',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'views' => 
  array (
    'field' => 'views',
    'label' => '浏览数',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'score' => 
  array (
    'field' => 'score',
    'label' => '总评分',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'comments' => 
  array (
    'field' => 'comments',
    'label' => '评论数',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'store' => 
  array (
    'field' => 'store',
    'label' => '库存',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'buys' => 
  array (
    'field' => 'buys',
    'label' => '销量',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'onsale' => 
  array (
    'field' => 'onsale',
    'label' => '上架',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'radio',
    'comment' => '',
    'default' => 'Y',
    'SO' => false,
  ),
  'onpayment' => 
  array (
    'field' => 'onpayment',
    'label' => '可在线支付',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'bool',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ), 
  'sale_type' => 
  array (
    'field' => 'sale_type',
    'label' => '类型',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'radio',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'sale_time' => 
  array (
    'field' => 'sale_time',
    'label' => '限时',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'UNIXTIME',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'sale_sku' => 
  array (
    'field' => 'sale_sku',
    'label' => '限量库存',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'int',
    'comment' => '限量销售',
    'default' => '',
    'SO' => false,
  ),
  'sale_sale' => 
  array (
    'field' => 'sale_sku',
    'label' => '限量已购买数',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'int',
    'comment' => '限量已购买数',
    'default' => '',
    'SO' => false,
  ),  
  'sale_remai' => 
  array (
    'field' => 'sale_remai',
    'label' => '热卖',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'checkbox',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'sale_youhui' => 
  array (
    'field' => 'sale_youhui',
    'label' => '优惠',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'checkbox',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'sale_tuijian' => 
  array (
    'field' => 'sale_tuijian',
    'label' => '推荐',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'checkbox',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'orderby' => 
  array (
    'field' => 'orderby',
    'label' => '排序',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'int',
    'comment' => '',
    'default' => '50',
    'SO' => false,
  ),
  'audit' => 
  array (
    'field' => 'audit',
    'label' => '审核',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'audit',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'closed' => 
  array (
    'field' => 'closed',
    'label' => 'closed',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'closed',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'lastupdate' => 
  array (
    'field' => 'lastupdate',
    'label' => '最后修改时间',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'unixtime',
    'comment' => '',
    'default' => '',
    'SO' => 'betweendate',
  ),
'dateline' => 
  array (
    'field' => 'dateline',
    'label' => '创建时间',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'dateline',
    'comment' => '',
    'default' => '',
    'SO' => 'betweendate',
  ),   
);