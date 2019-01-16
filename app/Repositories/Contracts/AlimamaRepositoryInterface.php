<?php

namespace App\Repositories\Contracts;

/**
 * 阿里妈妈tb客api接口
 */
interface AlimamaRepositoryInterface
{
  // 好券清单api
  public function taobaoTbkDgItemCouponGet(Array $para);

	// 通用物料搜索API（导购）
	public function taobaoTbkDgMaterialOptional(Array $para);

  // 获取聚划算的信息
  public function taobaoJuItemsSearch(Array $para);

  // 查询解析淘口令
  public function taobaoWirelessShareTpwdQuery(String $tpwd);

  // 淘抢购api
  public function taobaoTbkJuTqgGet(Array $para);

  // tb客商品详情（简版）
  public function taobaoTbkItemInfoGet(Array $datas);

  // * 阿里妈妈推广券信息查询
  public function taobaoTbkCouponGet(Array $datas);

  // 生成淘口令
  public function taobaoWirelessShareTpwdCreate(Array $datas);

  //tb客擎天柱通用物料API  tb客物料下行-导购
  public function taobaoTbkDgOptimusMaterial(Array $datas);
}
