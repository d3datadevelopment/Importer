<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');