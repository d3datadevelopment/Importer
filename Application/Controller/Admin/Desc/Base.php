<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B337EF2777AAQAAAAhAAAABKgAAACABAAAAAAAAAD/zfjxFCVzRpzyO7WgwKCYdjGjrCUuclAVJ9Tq6VB3X6kWFVihReR4Y1r2BcZZwgzjee/HXfgDvPoeha3LBAscwby5eusK6OSrtr6eo3N6i+KdquPgR+wHPeWjPAxf1hW//NAS+rQZ69I1K95Zo9UguQMRwLfCgtmKW207fQCS/KSyph/dx2voJegHd6jDvS7TDxh0nKTBLaLbNTTlyUcBVDwlf/UthSrtCAAAAFACAABBcW2HKlb9mNibTWQV/bakNFYyf+NFag8kg5HPzt1fUwMDgKAuNw0Z1U7qgiPxYGpGRDXqBcNA1cb296RyTQcrY7XHT52dJ/2pSvHRvaT9sJDmE5pi5b+mJHearV1CJn0tcDWLna2waZPDJBahyDk367rQ2hM5d1/pJoCPzBNZo40MIgzomWyizid3RHxhhKp3KUOj/LASH6/fjwReDmCJJX1ebiXAfHGwFWXK+5YH4y8W5wuGpSK2MDUHSZhhUq/lp7kVVGAOsLJObK4/q0iC6Cyti1u0ZKBQyEuwKViiyRm80uUwsBNHfKk7FPap8bMEJmBVTfVWRc85TFEXYQdttdAyqIlLQt/PxXBai7TRdPPoafyZOtZJdeBolE7175FFiCG70Hy3A1im2YysFlHRncdX3Afs7vOzvRags88iYfTZ7AAapHWJU9WUwk8l2FUujoS3Jvn0Qv/+jNizIAFWdtCD0VgBAtcZ2njcW0WTQbjVwHuzn8qrR2qny/qR/GQJty/w9lL34S9hqfPgDCeomZ5CYgiWRHxEvOw1q0EbBju/89+Ei+6tlRgwpGD8Cn349kGxC4bLbZ/23Cd6MK8Ym2PhWXPHW4GEnylfNKmaJQ0reaWy13QrgYqZa+Xso8n1KnflTYUkO6hp/4hMp8cSWqaGeVNqZ+zUwy0YxrGEyCN2NO7UShyTOHT66D0BctBBGxFmOFWtPIBcJBdfPfarR2pvOhpwDG5g/S3/lZgsIgc8ktqiCL+jb8INvcAI/On0+dp+Jh8rxONlklPtDDvHUQAAAFACAADIFx7ZkupFKaLPNbnX7CWEc/IGbEVqq7eNBc41OOflV8p0DZz1nLfoWuuQ1AHgnlf6OLsCpLiu/CKV4htrIfLOtoGBE9Sqe3Fr63oEqJN+ZMCVsZkLd2E9rioLPqoPaCLkhU+UDUKY7+xz+G1O77eDbd7k95w28uKTWcEMfzgwepT1TQYqZaG/Y9obRhOoIxdggHS+0tcyUMVnHvRUrZ1I2rSt6anlvjBkW6rd7KuZSLFMsivxlgDD7ixFu2o0Lk2v9Jv++WBnqZ0Ed7dvrKfuPowkgS/XF7kK+dwndXzgInUQ5sJ+LvukitTHPiPdGI2Nx8tVbUUBfGPthrqQvZ9Nj5rcvoR/FJt1L3API/xU3vYlDuX0eDhDvHzaTg9ep1w0WfksvCcoTjT9Kyvi9G72Pa9AoehtCs5QeV2fdL5NV11hEV8JwoRlg09C3Mw+/uh3baJwHubaPKwc/j7+ikEJaqxmQElbLFZuwHhRfyfbAEBm6nxP1oQJFq0JI2tb1w0/KmOvicbPHqy+r+3+XXBDyxnrVtlcbHwtYQ9vXkWKzfhFmvZMZytFqhT+uTXrwRyBOOp/HPap/MHJgO7DMljHhYKV7ZzDbXyim4jJAUnKt8BlRzyBenAtDDqfQS79ikdoRnjaS7WJk7m70kRDJE0zQ6nn5S8agyZzmPC9XvMFM6dOsjtwbz/i+6oxIBbwmeS/USxRpLtx4byJTeHbOLGB5t4T/d2XSRob7hSiTZReqDW2jBoG2yPDcDL0W0z7R72usvyeqq0PIb7qbvpqJC7+UgAAAEgCAAAOd141rWv1rBJlKiJm43ktYhKwAkse/Lcr8vdizp3DZwk90niNO10JeBpx7Na8M26K/DTQWp6vRIxf97QfhUsQvipuSVQz6P35p8UjO0ksxVuX2q26Xrz7PYtpDJPQMqGSIis/fHzvgGmYbcC3Mm6fl+ooBez+7lsKjq300wyWJ/KI4mI0VybBRcYCOhdrp0d6E+18wNENgvQ+WL+qV9lnJPHwWgFt9zE4ily14fTaJQcxihAiNkCeppzbSbn1ZKLZQlF/JHgyp/FVDdYA8N4aMeFO1lAIcMKkKP7JXyoIf2DjZCktYAkyj8HrkRqaRUMHjKa+mRCOtybYHlls9IX7PCRDRi3dKAuEP79AsnU0GkXJIhmwxqPnong3ii+QQ/PxLYDOu7HoRu822TMlcSP5DTho27XWtEsT7NhCCEW6cSIOCQa5v1p4Qjf2meUSD3wmqXKN4J1MDD1Fp562+rpOZ6EPHx4qAV3p6JdtvwgkUo62zdJyfaiVf6NZQ8wTmWr74RIAweSRzeMdh/q+cvvEjJ8Uus0IfOstgGpTiOjWH13NSb72ATNucMvrt+EBuIUA+eOz/+KTWPdHJf9qETMGWtJgp1qAmtrH6TlxKGZ7w0KUK7tfNgOIoXX8Fd5vahux64UwW7mpzARGJvK7LRpHmxp26agl+AqiqwC4wr8xuRqjh/WhpspLm0MD8pF/BrI6fhk+hdyIDiO99hgs7FBbBAiCLJ00AuCY0933+JxcvVqPkmFgFsU28p1t+6OHx2WnY4KnfbeY/QAAAAA=');
