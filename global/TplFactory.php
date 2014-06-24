<?php

/***************************************************************************
 * 
 * Copyright (c) 2011 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/



/**
 * @file TplFactory.php
 * @author zhangdongjin(zhangdongjin@baidu.com)
 * @date 2011/11/23 11:06:47
 * @brief 
 *  
 **/

class TplFactory
{
    private static $arrConf = null;
	private static $isInit = false;
    /*
     * 本数组自动生成，方法参见文件末尾的注释。
     * */
	private	static $smartyClassMap = array (
		'Smarty' => 'smarty/Smarty.class.php',
        'Smarty_CacheResource' => 'smarty/sysplugins/smarty_cacheresource.php',
        'Smarty_CacheResource_Custom' => 'smarty/sysplugins/smarty_cacheresource_custom.php',
        'Smarty_CacheResource_KeyValueStore' => 'smarty/sysplugins/smarty_cacheresource_keyvaluestore.php',
        'Smarty_Config_Source' => 'smarty/sysplugins/smarty_config_source.php',
        'Smarty_Internal_CacheResource_File' => 'smarty/sysplugins/smarty_internal_cacheresource_file.php',
        'Smarty_Internal_Compile_Append' => 'smarty/sysplugins/smarty_internal_compile_append.php',
        'Smarty_Internal_Compile_Assign' => 'smarty/sysplugins/smarty_internal_compile_assign.php',
        'Smarty_Internal_Compile_Block' => 'smarty/sysplugins/smarty_internal_compile_block.php',
        'Smarty_Internal_Compile_Blockclose' => 'smarty/sysplugins/smarty_internal_compile_block.php',
        'Smarty_Internal_Compile_Break' => 'smarty/sysplugins/smarty_internal_compile_break.php',
        'Smarty_Internal_Compile_Call' => 'smarty/sysplugins/smarty_internal_compile_call.php',
        'Smarty_Internal_Compile_Capture' => 'smarty/sysplugins/smarty_internal_compile_capture.php',
        'Smarty_Internal_Compile_CaptureClose' => 'smarty/sysplugins/smarty_internal_compile_capture.php',
        'Smarty_Internal_Compile_Config_Load' => 'smarty/sysplugins/smarty_internal_compile_config_load.php',
        'Smarty_Internal_Compile_Continue' => 'smarty/sysplugins/smarty_internal_compile_continue.php',
        'Smarty_Internal_Compile_Debug' => 'smarty/sysplugins/smarty_internal_compile_debug.php',
        'Smarty_Internal_Compile_Eval' => 'smarty/sysplugins/smarty_internal_compile_eval.php',
        'Smarty_Internal_Compile_Extends' => 'smarty/sysplugins/smarty_internal_compile_extends.php',
        'Smarty_Internal_Compile_For' => 'smarty/sysplugins/smarty_internal_compile_for.php',
        'Smarty_Internal_Compile_Forelse' => 'smarty/sysplugins/smarty_internal_compile_for.php',
        'Smarty_Internal_Compile_Forclose' => 'smarty/sysplugins/smarty_internal_compile_for.php',
        'Smarty_Internal_Compile_Foreach' => 'smarty/sysplugins/smarty_internal_compile_foreach.php',
        'Smarty_Internal_Compile_Foreachelse' => 'smarty/sysplugins/smarty_internal_compile_foreach.php',
        'Smarty_Internal_Compile_Foreachclose' => 'smarty/sysplugins/smarty_internal_compile_foreach.php',
        'Smarty_Internal_Compile_Function' => 'smarty/sysplugins/smarty_internal_compile_function.php',
        'Smarty_Internal_Compile_Functionclose' => 'smarty/sysplugins/smarty_internal_compile_function.php',
        'Smarty_Internal_Compile_If' => 'smarty/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Else' => 'smarty/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Elseif' => 'smarty/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Ifclose' => 'smarty/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Include' => 'smarty/sysplugins/smarty_internal_compile_include.php',
        'Smarty_Internal_Compile_Include_Php' => 'smarty/sysplugins/smarty_internal_compile_include_php.php',
        'Smarty_Internal_Compile_Insert' => 'smarty/sysplugins/smarty_internal_compile_insert.php',
        'Smarty_Internal_Compile_Ldelim' => 'smarty/sysplugins/smarty_internal_compile_ldelim.php',
        'Smarty_Internal_Compile_Nocache' => 'smarty/sysplugins/smarty_internal_compile_nocache.php',
        'Smarty_Internal_Compile_Nocacheclose' => 'smarty/sysplugins/smarty_internal_compile_nocache.php',
        'Smarty_Internal_Compile_Private_Block_Plugin' => 'smarty/sysplugins/smarty_internal_compile_private_block_plugin.php',
        'Smarty_Internal_Compile_Private_Function_Plugin' => 'smarty/sysplugins/smarty_internal_compile_private_function_plugin.php',
        'Smarty_Internal_Compile_Private_Modifier' => 'smarty/sysplugins/smarty_internal_compile_private_modifier.php',
        'Smarty_Internal_Compile_Private_Object_Block_Function' => 'smarty/sysplugins/smarty_internal_compile_private_object_block_function.php',
        'Smarty_Internal_Compile_Private_Object_Function' => 'smarty/sysplugins/smarty_internal_compile_private_object_function.php',
        'Smarty_Internal_Compile_Private_Print_Expression' => 'smarty/sysplugins/smarty_internal_compile_private_print_expression.php',
        'Smarty_Internal_Compile_Private_Registered_Block' => 'smarty/sysplugins/smarty_internal_compile_private_registered_block.php',
        'Smarty_Internal_Compile_Private_Registered_Function' => 'smarty/sysplugins/smarty_internal_compile_private_registered_function.php',
        'Smarty_Internal_Compile_Private_Special_Variable' => 'smarty/sysplugins/smarty_internal_compile_private_special_variable.php',
        'Smarty_Internal_Compile_Rdelim' => 'smarty/sysplugins/smarty_internal_compile_rdelim.php',
        'Smarty_Internal_Compile_Section' => 'smarty/sysplugins/smarty_internal_compile_section.php',
        'Smarty_Internal_Compile_Sectionelse' => 'smarty/sysplugins/smarty_internal_compile_section.php',
        'Smarty_Internal_Compile_Sectionclose' => 'smarty/sysplugins/smarty_internal_compile_section.php',
        'Smarty_Internal_Compile_Setfilter' => 'smarty/sysplugins/smarty_internal_compile_setfilter.php',
        'Smarty_Internal_Compile_Setfilterclose' => 'smarty/sysplugins/smarty_internal_compile_setfilter.php',
        'Smarty_Internal_Compile_While' => 'smarty/sysplugins/smarty_internal_compile_while.php',
        'Smarty_Internal_Compile_Whileclose' => 'smarty/sysplugins/smarty_internal_compile_while.php',
        'Smarty_Internal_CompileBase' => 'smarty/sysplugins/smarty_internal_compilebase.php',
        'Smarty_Internal_Config' => 'smarty/sysplugins/smarty_internal_config.php',
        'Smarty_Internal_Config_File_Compiler' => 'smarty/sysplugins/smarty_internal_config_file_compiler.php',
        'Smarty_Internal_Configfilelexer' => 'smarty/sysplugins/smarty_internal_configfilelexer.php',
        'Smarty_Internal_Configfileparser' => 'smarty/sysplugins/smarty_internal_configfileparser.php',
        'Smarty_Internal_Data' => 'smarty/sysplugins/smarty_internal_data.php',
        'Smarty_Internal_Debug' => 'smarty/sysplugins/smarty_internal_debug.php',
        'Smarty_Internal_Filter_Handler' => 'smarty/sysplugins/smarty_internal_filter_handler.php',
        'Smarty_Internal_Function_Call_Handler' => 'smarty/sysplugins/smarty_internal_function_call_handler.php',
        'Smarty_Internal_Get_Include_Path' => 'smarty/sysplugins/smarty_internal_get_include_path.php',
        'Smarty_Internal_Nocache_Insert' => 'smarty/sysplugins/smarty_internal_nocache_insert.php',
        'Smarty_Internal_Resource_Eval' => 'smarty/sysplugins/smarty_internal_resource_eval.php',
        'Smarty_Internal_Resource_Extends' => 'smarty/sysplugins/smarty_internal_resource_extends.php',
        'Smarty_Internal_Resource_File' => 'smarty/sysplugins/smarty_internal_resource_file.php',
        'Smarty_Internal_Resource_PHP' => 'smarty/sysplugins/smarty_internal_resource_php.php',
        'Smarty_Internal_Resource_Registered' => 'smarty/sysplugins/smarty_internal_resource_registered.php',
        'Smarty_Internal_Resource_Stream' => 'smarty/sysplugins/smarty_internal_resource_stream.php',
        'Smarty_Internal_Resource_String' => 'smarty/sysplugins/smarty_internal_resource_string.php',
        'Smarty_Internal_SmartyTemplateCompiler' => 'smarty/sysplugins/smarty_internal_smartytemplatecompiler.php',
        'Smarty_Internal_Template' => 'smarty/sysplugins/smarty_internal_template.php',
        'Smarty_Internal_TemplateBase' => 'smarty/sysplugins/smarty_internal_templatebase.php',
        'Smarty_Internal_TemplateCompilerBase' => 'smarty/sysplugins/smarty_internal_templatecompilerbase.php',
        'Smarty_Internal_Templatelexer' => 'smarty/sysplugins/smarty_internal_templatelexer.php',
        'Smarty_Internal_Templateparser' => 'smarty/sysplugins/smarty_internal_templateparser.php',
        'Smarty_Internal_Utility' => 'smarty/sysplugins/smarty_internal_utility.php',
        'Smarty_Internal_Write_File' => 'smarty/sysplugins/smarty_internal_write_file.php',
        'Smarty_Resource' => 'smarty/sysplugins/smarty_resource.php',
        'Smarty_Resource_Custom' => 'smarty/sysplugins/smarty_resource_custom.php',
        'Smarty_Resource_Recompiled' => 'smarty/sysplugins/smarty_resource_recompiled.php',
        'Smarty_Resource_Uncompiled' => 'smarty/sysplugins/smarty_resource_uncompiled.php',
		'Smarty_Security' => 'smarty/sysplugins/smarty_security.php',
    );

	private $_objSmarty = null;

    /**
     * FIS服务器地址
     */
    const FIS_SERVER = 'http://10.48.30.87:8088';

	private function __construct(Smarty $objSmarty){
		$this->_objSmarty = $objSmarty;
	}

	public function __call($name, $arguments){
		if($name == "display"){
            
            //如果需要调试conf数据，则从fis服务器获取数据
            if($_COOKIE['FIS_DEBUG_CONF']){
                $this->_objSmarty->config_vars = self::getDebugData($_COOKIE['FIS_DEBUG_CONF']);
            }

            //如果需要调试页面数据，则从fis服务器获取数据
            if($_COOKIE['FIS_DEBUG_DATA']){
                $this->_objSmarty->clearAllAssign();
                $this->_objSmarty->assign(self::getDebugData($_COOKIE['FIS_DEBUG_DATA']));
            }
            
            //构造关联数组以用于json或数据调试、查看使用
            $vars = array(
                'data' => array(),
                'conf' => $this->_objSmarty->config_vars
            );
            foreach($this->_objSmarty->tpl_vars as $key => $d){
                $vars['data'][$key] = $d->value;
            }
            
            if($_COOKIE['FIS_DEBUG_EDIT']){     //调试状态
			    header('Content-Type: text/html');
                $charset = self::getCharset(var_export($vars, 1));
                if($charset == 'GBK'){
                    self::iconvData('GBK', 'UTF-8', $vars);
                }
                $data = array(
                    'json_data' => json_encode($vars['data']),
                    'json_conf' => json_encode($vars['conf']),
                    'php_data' => var_export($vars['data'], 1),
                    'php_conf' => var_export($vars['conf'], 1),
                    'options' => array(
                        'is_gbk' => $charset == 'GBK' ? 1 : 0
                    )
                );
                echo self::getDebugHtml(json_encode($data));
                return;
            } else if($_GET['__type__'] == 'json'){     //json数据接口
                header('Content-Type: application/json');
                echo json_encode($vars);
                return;
            }
		}
		return call_user_func_array(array($this->_objSmarty, $name), $arguments);
    }

    /**
     * 将数据从指定编码转换为另一种编码
     * @param string $in 输入编码
     * @param string $out 输出编码
     * @param mixed $data 要转换的数据
     */
    private static function iconvData($in, $out, &$data){
        $data = eval('return ' . iconv($in, $out, var_export($data, 1)) . ';');
    }

    /**
     * 获取字符串的编码格式
     * @param string $content
     * @return string string
     */
    private static function getCharset($content){
        $default = 'UTF-8';
        $charset = $default;
        if (function_exists('mb_detect_encoding')) {
            $charset = mb_detect_encoding(
                $content,
                array_unique(
                    array(
                         'UTF-8',
                         'GBK'
                    )
                )
            );
            if ($charset === false) {
                $charset = $default;
            } else if($charset == 'CP936'){
                $charset = 'GBK';
            }
        } else {
            if(utf8_encode(utf8_decode($content)) != $content){
                $charset = 'GBK';
            }
        }
        return $charset;
    }

    /**
     * 从fis服务器获取数据
     * @param string $name
     * @return mixed
     */
    private static function getDebugData($name){
        $server = self::FIS_SERVER . '/fis_debug/tmp/';
        list($id, $is_gbk) = explode('-', $name);
        $data = json_decode(file_get_contents($server . $id), true);
        if($is_gbk == '1') self::iconvData('utf-8', 'gbk', $data);
        return $data;
    }

    /**
     * 构造调试界面
     * @param string $json_content
     * @return string
     */
    private static function getDebugHtml($json_content){
        $html  = '<!doctype html>';
        $html .= '<html>';
        $html .= '<head>';
        $html .= '<meta charset="utf-8">';
        $html .= '</head>';
        $html .= '<body>';
        $html .= '<script type="text/javascript" src="' . self::FIS_SERVER . '/fis_debug/debug.js" charset="utf-8"></script>';
        $html .= '<script type="text/javascript">';
        $html .= 'F.render(' . $json_content . ');';
        $html .= '</script>';
        $html .= '</body>';
        $html .= '</html>';
        return $html;
    }

    /**
     * 判断调试请求的ip是否在可接受范围内
     * 可接受范围包括：127.0.0.1, 10.xx, 172.xxx, 192.168.xxx
     * @param string $ip
     * @return bool
     */
    private static function isInternalIp($ip){
		if(is_array(self::$arrConf) && isset(self::$arrConf['ip_preg'])){
			$preg = self::$arrConf['ip_preg'];
		}else{
			$preg = '/(?:0\:)+1|127\.0\.0\.1|10\..+|172\.(?:1[6789]|2.|30|31)\..+|192\.168\..+/';
		}
		if(preg_match($preg, $ip)){
			return true;
		}
		return false;
	}

    /**
     * @return string
     */
    private static function getClientIp(){
        $uip = '';
        if(isset($_SERVER['HTTP_CLIENTIP']) && $_SERVER['HTTP_CLIENTIP'] && strcasecmp($_SERVER['HTTP_CLIENTIP'], 'unknown')) {
            $uip = $_SERVER['HTTP_CLIENTIP'];
        } else if(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
            $uip = getenv('HTTP_X_FORWARDED_FOR');
            strpos($uip, ',') && list($uip) = explode(',', $uip);
        } else if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
            $uip = getenv('HTTP_CLIENT_IP');
        } else if(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
            $uip = getenv('REMOTE_ADDR');
        } else if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
            $uip = $_SERVER['REMOTE_ADDR'];
        }
        return $uip;
    }
    
    /*
     * 根据参数生成并初始化smarty对象
     *
     * @param $param
     *      array: 根据array进行初始化操作
     *      null: 取第一组配置进行初始化操作
     *      string: 取param指定的配置组进行初始化操作
     *
     * @note: 本函数并非单例模式，每次都会new一个
     * */
    public static function getInstance($param = null){
        // 初始化Smarty自动加载
        if(!self::$isInit)
        {
            Autoloader::addClassMap(self::$smartyClassMap);
            self::$isInit = true;
        }

        // 从配置中读取参数
        if(!is_array($param))
        {
            // 加载配置
            if(empty(self::$arrConf))
            {
                self::$arrConf = new Yaf_Config_Ini(APPLICATION_PATH.'/conf/smarty.ini', 'smarty');
                if(empty(self::$arrConf))
                {
                    self::$arrConf = null;
                    return null;
                }
            }

            // 取指定的配置组
            if($param != null)
            {
                $param = self::$arrConf[$param];
                // 不存在则出错
                if(!$param)
                {
                    return null;
                }
            }
            // 取第一组配置
            else
            {
                $param = current(self::$arrConf);
            }
        }

        // new一个smarty
        $smarty = new Smarty();

        // 根据参数初始化该smarty对象
        $smarty->setTemplateDir(self::__absPath($param['template_dir']));
        $smarty->setCompileDir(self::__absPath($param['compile_dir']));
        $smarty->setConfigDir(self::__absPath($param['config_dir']));
        $smarty->addPluginsDir(self::__absPath($param['plugins_dir']));
        
        if(!empty($param['config_load']))
        {
            $smarty->configLoad($param['config_load']);
        }
        
        if(!empty($param['plugin_search_order']))
        {
            $smarty->plugin_search_order = (array) $param['plugin_search_order'];
        }
        
        $smarty->setCompileCheck($param['compile_check'] != '0');
        $smarty->left_delimiter = $param['left_delimiter'];
        $smarty->right_delimiter = $param['right_delimiter'];

		if(isset($_COOKIE['FIS_DEBUG']) && $_COOKIE['FIS_DEBUG'] === 'YlwtSmt' && self::isInternalIp(self::getClientIp())){
			return new TplFactory($smarty);
		}

        return $smarty;
    }

    /*
     * 相对路径转换为绝对路径
     * */
    private static function __absPath($path){
        if(is_string($path) && $path{0} != '/'){
            return ROOT_PATH . '/' . $path;
        } else if(is_array($path)) {
            foreach($path as $i => $p){
                $path[$i] = self::__absPath($p);
            }
        }
        return $path;
    }
}

