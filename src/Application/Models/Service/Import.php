<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.7.1 SourceGuardian (20.10.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
