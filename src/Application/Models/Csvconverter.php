<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.4 SourceGuardian (02.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
