<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.7.0 SourceGuardian (31.08.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
