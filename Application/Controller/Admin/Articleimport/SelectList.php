<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.1 SourceGuardian (20.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
