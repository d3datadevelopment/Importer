<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
