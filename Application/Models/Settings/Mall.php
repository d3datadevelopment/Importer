<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.1 SourceGuardian (20.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
