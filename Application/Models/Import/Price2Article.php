<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');