<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');