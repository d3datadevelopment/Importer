<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.6 SourceGuardian (25.05.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
