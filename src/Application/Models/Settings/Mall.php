<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.7.0 SourceGuardian (23.08.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
