<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.7.0 SourceGuardian (23.08.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
