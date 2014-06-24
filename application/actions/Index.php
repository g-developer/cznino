<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/



/**
 * @file Index.php
 * @author bae(zhangyouchang@baidu.com)
 * @date 2014/06/24 13:46:39
 * @version $Revision$ 
 * @brief 
 *  
 **/


class Action_Index extends Yaf_Action_Abstract{

	public function execute(){
		$get = $this->getRequest()->getQuery("get", "default value");
		$name = $this->getRequest()->getQuery("name", "zhangyouchang");
		$model = new Model_Index();

		$tpl = TplFactory::getInstance();
		$tpl->assign('index_title',$name);
		$tpl->display('index.tpl');
	}











}
/* vim: set ts=4 sw=4 sts=4 tw=100 */
?>
