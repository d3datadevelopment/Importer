<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B337EF277FAAQAAAAhAAAABKgAAACABAAAAAAAAAD/8r/0RwtSb2FxmEGA0urP9AVuknaHGjiiXtL/zFyR6R1q3JyiTj9Z+qcgesrwkqRgarN1W/EVnr7Q40rLg1Qu8uF/YDwIlUl7HRCH46eruDboNcN0cbWU44ecinQ0R76iwwutd/rTRCkmFfejSYaHQlSEOC5q5ydnWjZXhm214+Cc9uEEI5sH9of7Wpvv2F3KMRZshypDA/V7ne7AwGkWiuJkI1aeCIqHCAAAAOgHAAAmXwLwb8uRrHxnuQtflh7aBU/PCcjFE1/cw99jo8CEvE044MnTQd0DgaF/6K8wsQMGcoKy/vm0SAezLVJeQU9BRVREL43MsGuxBptcwQsgzybnfHKxBPYG//ephPAqy/uGBTExPEJy67AEpOC0p98b7ErY6Th9oY4RT4KU2WLSDPCZJjxgqR/qJRAKJCZ6ov5dsqI3FTKHl6YNEzTkFX4mHs8CSiOsC1dJelQDXmuON3mTZBwkDQTis0H6Bg7q9u5G23XDm0fh3JSg2mnVqLgFru63C8O36KHC5yxWoGzFhrbavq8xsQXuF8QGmCoN4hTkqAjtJEUptlCaeUBSHnVctRP87jevfs2pILovBdo5GMRpuPem/VMN0vdBFaQCkiqDBuwumozA8DpNNH2B7advr2AmK65Wv5rIe8opZEMO7EBkLUBFvVYeYxORcfEwWXAYjMV9D9rI/ZBPXht8VjeNLSsvkO4MmkhT0UgGiUyLg9OhCTG9PM5EmQ2QOnwPebbTNpv4FINlgXG0jMdEqOsIbILxQI0KvtzWFH5GCv3jhyqw969rk33i65o8cktjvxmpH/zzcuom+INRtVKtM+86+q0d13v4O6KfkyhZeAPfzDAHbF1Cm/NvXMWtNS4jaSx9drOpEfXJYbuvtNA1+c4JOKbCCGtiyCXQ+CoWfghjFF+I6LLJjFHiH5WNm2o4lqn/cX1PFNZzDT8jxtbF0vXfo2LSf+4mAAn130gzA7479ArMF9OzFh57YaeATCrhR9C4Df3HRRpJVlL5se+YEZZLvzKbw3n6uICUcTh0XSYrVrv1FyWkz/DGFDyP06C4H4jXiiTOxf0176BMNXy9VYgayZ3VtO9QlWREby6bU50K1g+GSsyndYWOBXfRKBKOxVOf4motLEBBYdklpwheUtJUpZLLGBKJ4ul7ts+YPHjv5cMk0cgZJ/Udba/dET8K/5nzB0L74fzpvHFlsrZtWrhW25sYFAw7JlXgC0PGpIBLvnvcJz3r2N3FUxHH5AZ4ChG1BuK/61dWOYzIhpFt3ret228Oy4oF9V1iJ7nPV0vytgULxUocQ+pmdtrkdalf2qsfXKbUwnKOcKakFdEi/pLXJHUcOnKDhpNQy3uJHqwcxISwKNzKypqZX3p44KDSC03J7LeGODDKYQTMdY03X12PLQq6HbjI90W/SbwvFbxE6yRyhIo1w+L51ZzwxQDpSYAUoHnyYS4K6G/V9sKSg90rYji9+4edzZSeAC3OWnSlAQvDsTmoOjhOhCB5J2XWOrGL/sy+fK65/tU3mvvvIlw/Ye//a70auleheqCOYqGslwlV/ZteyZ/b269tNCOXVvjmwaL8B5QPm/nO3Qxxl2Sd1PpKJhxzb5ARkeY7QwgBHcHhWMY8rOnIDmowPBK8lzP5Bh3i2xfLmYVCLSZwmBt+SgWHVN0Ygyk2g111KzM6WcVbnx36LwXg/Q/vRAfJ0CjXlVBPvcQzgemV9uFFMDIGNRAuI6pUXRUd5iJbja/MTx07PxN6/8E2z45IKZkQcAHVKR8FK/SD++6s8cvP5+d4gKSiw3W7zxeeciJeNFGYC57QxQei9U5I2BkG88EmaIO4Z8z9JkGDOVl/uMvOWlKRii+xSB1lvZpSWFLmv6EahcFjRt6IgYIon/65lcBRZe35avTeFgRqoG/bLO++DjVIk00Vq59m3jcXOClaSKjsu3AepFWgoGzn2O7D9kLv5ElP+KQbILiY06C7cLj/m/BSG25saTyhFZQmBw5Lg3v8MICDzBzEqxgWN+XXC8kEUVF2HSCkQc0EUGhJqnCcFierkx//fuP9X/sZ7MoWzpUhw73QXVijAr8XnTZfcU7eUtb+6LR5p5S1LIJpkPuDdUSxkceBLbYL/KOeL3bvfn48z9uoNFPCH4qQYEO92AM0JHgNuZgCWufFJJ3y6NyNUBSm8koZ3JbaFzIk7cgxWXZehhx3ydJnEHQ6oZ2lP26fiG+F7RisBfRTn31CWSaJajOXU6eOuMbzjbYG4w2OQHMKATqKxpoVxvRjgH5rHnTxGPo00oNMsa7ZAEglcMeucnbgCi+BCmN0TBSFKlbYdJIIL/uPPaJ9UQts+8C54biJiQawjweCNj3kgnz8065r3kW4xgwbqwEZPFxj4dX/Dfbj0HeftH5XZ6ewmtUlPQDWsf3ocDUviS9a5pQJMgZeDoq7zTKy1fbhcpZW/DD+V3gKtsmnn+FGV2JiTr6NF9a+QZeGMp/c4FqPbtcZnBAavQhCeBjH/IUjMfLVY/RKDCJ5bTTYPOJCuaNn7nNn6doosEupETzF2mj5oNYEXHBBCxpauQ2LWf3fyfaVDGzMhiansmlesRAhxb6ZDPpRc080Oh29pyIhyQTcZ7SCZY543VWNsXnfc4P3CSAVDNwBYKlSOmEAby/1sGevtkFVhXUyL2vxUxVBu7e1owl/E0HFJPjYBpNnpFp+/Lf1XA2UY+HjlJjRcRLPZTpyrIaPXoWkZ89giLC/XKFfgBqu5Ei2Z5rVWMW+2GVI6zoHIfmX7gzjiVDpQ1qo+sabuNRRVw0JT6kygnOT3n9lp06qWZFw+xWeIH/eyaIRgOpiRjGSbCXtzUQpDGjoQec6dqt14gacjS3uDl839TY+00yhIjF1KjMWTpPmoVGkN7PfaPowcjUUNheLCG6k8iZ9KColPG5jHv8pWUX0EwTiClEAAADgBwAAXwGSq6yIJYDSBfoy186DP0Kgo+SvS6AJy1FPG4fekjHFazo5bSUVDglZoT9Mq448VEJtEY2uYCZ8eS7fcZ7njC2bazwMFydWvSdTv24z5+4J3ZWOMOnfea35aSHPPuwF1MPQmgDAX62AK0aP5tp6DLIW/yZnwG90DU7rCmoWFzTtC6l8vJs8Elo9qGWD6VAz+Y0Sm4XZ4TiSG7gWmeS1ZLd0cokN/z3A+lJlqWfmLSGNN09T96+nJM/BN1VIgXzCcpyMRRh6EY3piMOr9ExnXfRG6Keo6D0iwjbkvTNatxL5GipK3F2gJd457XCzX5GOYor1Ts7rfQ2zxdyAcX8DRYzoDKtDLfov9CcFzPEKqed+dsaEf+4dJ29Tq3c0G8GbANvcS0HKe1QOPKIbKIKRZjXTaRtKN6CUDez9hxc8MkbljPv3xK6rek5u9gE31AIIHvLppFCr6dX3Mtjair14Eeon1xGxHek8H09OSS7jUSN4VxP6iW1s2UKutGqhFJR7bAjjLzkklFY3HcJib5gXzkbX+kR1omQV5Mq0G6m/JwfcrKQaFKyTq/wNiCrG9U5N7V40Gmf1w1UvOk7FC3S3O1LINFAoLi14jnkBB4CV1fMj/v7Kdc1vyT6nwCs9UoMCk/HHYHtVC0gL+dEbcSl2thMb/gybw9krqwCVZcUUQeIuoccA6Ce1/NJL3KQnu/f+YmTezVOiAdkZdtYLr7eW4Xcx3zN1jbWgpaQNe964LWsW2iFWTfACkmMnxO/M2JTYDQ7pkb1/Ricjz01AYloAM6IXd3dX/CieaoGy7px75kwyIPLttHKpQAuDzUfwqKA0hh/VuNWR4+znB0DmchN6LT9olHqZUqstw3ndB5zGxqJDAXehjPvO2KXWFy+g6SgfIK4a79L0tfPMeTC5AcJ8gnozSHhd0DUcuyo8/PtwmsOZHoO+VXV1lWRARo1DfkLw7loLvVN+MI7gC7OMZS1TDDcXF30L2l3vuTcpG11xX70nOZLyy4idSbcoBKxp6jY3C3Xt6OBnjH2irf2JlyeHnF++4mOQffQY1pFCVAX0OyF9Nq/W/1ldBBDnBxgJ777rCNlOt18u49ISYiz4oIcL3ZxVE4gTKfxKKgOpHsqz5JVg62peB8DvlC0R2bkIpybNrFrZO+YGmzTYmokPpgOSfNC6TpF2eMKuwu3VPrVvli25HC/FRxQ0Uq8/ynzS6ygqL7rM0DF+bR07YMinhPLl2Z7sFh7EIgv851e/+oiDXj9LgqAHwi47GGvwO+hHEfkhlaJ6lobiaR3n3DTMWGHqkxd811O3EqY4MEKlRnu13pY5euGXp6YZbJJfocLLOzNrw/VxOAi3hSdLF3zQNZFlKS856tMEGd2IIL4z6NkscLwInvmLvcPBD7pWwx1b1VnquLtAkqT8/jP0rNjT1jlx/28/IPkD4b9CSRmtFb1tR4dur75Ru2U8FT69bcPZOrMO4UDfxW3wpqZhGn0CDr7OaoPPmSR4KSDXyBV/W1C4ta9uVV0xU1XKfKsLZ+kn8wDvEMBcfzzwkatNV64uZrGn7V7sX44PA3pNUv9u9LNaIXER4/6L27WDbU6U3IUIG8VczL//0Y5k/6R84ohIp0UklMJ8dzsbejFEG29l8QWOlvk7tCLJHWnp8wNBQKJQHlLuCiYAas2VYJKQaAQRwdNTTilYWruEeBQsXlKpzk84E1D4lJkJUJMIl5uqiQdaSS6dJadjvbByZ6jHTsik7VJAk14CE5Vs3Wsv8J5MDh+gASkgRE/BUWbooor53GOuhxC0gp4hVR1RKWfUqahwYd1OmbiISo2DHaapfEmO9IkTdZA9+62CerZ0C+vaNsbUc3TxH8K2oVVvvYONXDTbWWTd84+ir8Hcdr6IFp5vYlTMKeUiSmMEUoQCFScXlLACaowhb8J+9VGcQH/8IOtG11F3rZvLJ5wxk9PZDh67kfyq+TEreXXwY2p/0OfXJvz+4q1MFMS1dmua/7sYJJsYB/Xl373ri3Ae+oOvABP0gylTMkFIGhWHIFP6zN0TGaVWsEIRvCo/zg6QWbUYehZwlfjt0X+d7stJRZexoWhJt1BAfwGIvBjDnwuAX5/+sdtJkOKqtTPFp13bMpMBc35xz+OnfYqGXVChWKmj1rAKy166xjnPeGtomc93z5ItuUrxmBbqxFw3+S8DAefitqPeXdT2IZ5byg02jLilX2iVBy3a3N7lxXwAShA4OL5TkJJQoF0e1iy+bgqOczbCshMTE/5NFRyHEHgy6xZyOAXVP7gPCugNhvqwlg+cZrpkaj1b1kOtemutmA4QM4TXvyIsH4sT7AUxoC6p4cwI/LwvEPZ8zmxQHWFxKjwaCnoiVu6jBwIyfopOcSkfBWvMzRDuBLgKDVHg6mTQk1y40HgwZaZ6yXA1rG67DWub7OcgrmoKu16KBlcECljS5ivAL7rB6MlmkHpUccgXAfLBVAhVSk0cmrhh6MK7J7ClQpYzbFR88TMTEqPnhLUkNR6Cbmpn+eEqKmHRbZKXlwHLYmfstAELib/vBhPepiTCRf77Nv6Qh8BGmVd34cNlvCyfobFcGUk3qkbx+511Y7CQf1VMXUl05vzklFVDPh729fwDtaA6p++AR6uXawwh+OG1nW2p/ymi9lGumy3tRK9Cu/UPm6DoWgXRqRUNaBEwOoQ147WHEmwcUgAAANgHAABFU4EfrOp2upTjSTsW5IbTqBCJqa2CPEcmwxImpRBfWF/g6vtUJINqWF/wSpeuK+Enpqt3ViGFF/oJcg9C71vcBB1B3ejuWxzhh6DzHb5Hzb13RK4k5jx0XOtBu61anE//1I2OxyQHLnxoES/YP3Ao1qZCX+YRpNMpPLXhApcnO+9SjnWrN8fQRdeHBBktj4H9obhk1dHIQYX8BjTY8/9CiUAkby7TR+iuDFtf2nEXKfEZy8Vqqx1E3yr9jYpY38MZPxnJPSdmP7bZDnAOcor88OWV+StcNQ/o0+Gxt+/fvmhY37t5X608WzBYoDoTzhTIQc/yCp7a1DGAFgW+g5RwnrY4lAM4PRPEoIm8JTCRcr8gPJtdVUMWxPetS34g5IkKVZQcgPouwVHj+it7T9yqi7iHbA3Mfpp4qwwBTiDCurKSjnq+Tet/GNTX++IchjweowwO9V+CWaCPIwF0kSIXkCktiIyQOgwr679S8wszFLiIudQpwMFmUu7GfOR+1UhxZCA9XaHWDoCIpqYTAjzy/qdqbOUrGaklRddFj+k4idX3rqh0YGkmNL22OmG6CNwyth89cPj2ZrYHtccZTB0McRZyxM3NBg+1cy+zkmy17wfx+OUq9Xds0zZw2EEKrtIxRczeDeR5bYhy61cZ2YFUZRHQP4LdIgq4TpO9JHVEhWi9zGQrQ3V4iBt7FzvY/Mxkhochxd7egIry3W70ng3CjkardyrIUSdycpS3gDrY9KJtzMihgZoCyGQFIcsY7DGVtTC4BMS9HLT+G4wMfHAYaIihshFnyZBLjYYUYlGiXWf6/mRxZsta13naZe5/0FwoalhwxpAld5urLk7K/6G0CUeAEXcFCpsZlBc00p7ozihsgkeZixmv3nYwQ4n/whlHuZiTSHWKYYCT8UNTRTbi/l+C8daCrnHqFxu0Tzfko4U2QMkn8c/jxD66CtEHu21wJGRfdtSTBk0V43Uw6Pw966d0MGsIu3c/u+cwyrBQdx4MAou5+gl9gw26My4Ll9A+Se6Cnm7KGSADcFQU7ITisbFPlCl5Cf7XWmm2e8efFa9HauPkyeBL21AXNSClDsMTLJO5KJvo1NRHB6jUPDwr/s6d8edlBzVZYDviiziQMTUAM3qbSsEIcW4GBDuGYj2AgIkQuQTnZeSvNfBo2+Q3PEu6lo3YA7hj3sa5XSZs8fc8QTlnL234cHX9HZmGd33nhHjqYDnxGWKxlTJq6tYfTuUUwnrBvp94o4mWby1orOznOnQT0dSI//tZ/Uv4tf7pPmYYCQ+dQ7uZKbv7GWtv9s9B3LAuP2GBTvstt2U+CJTrUuOp6oF/MFkW1Yq0lifzQGkZvxIRIGNCuB0N/rsVqSA/UbAi0SEz1siNPgX7rD8OMkZ4k8ppRl5U9gxOHT+5fcPYLMS9ppkLZ9nQtayjs58km+YXLPSDJLBDRlP9GCGVRJk8n9U8V/An6ts5A8dh5DfK+n69zqiUpM+XtTpn5OZg9TdfNawuF51d6Mf8VQifZSbDp9B5bI9NB7RG5o1yOsGq41TSmJbpje9jBc6TqcYTBFQxYELWSdF/p60XSx9eQPywz0lcmk6Pu9g8I5hVDp+tmiBp7yH2ihbNhaM9G3r2mere2h9ZoR31tQMHRKSghxAx47F696gfp+gtvD3syVArRGf4LSem+R3yVFLsiai7/0qbPqhbh0upQDDm7Z/A7RKs8zxsMjAT7lXary0vz2COytp6pEKm2JJUsL+G0wJtPvvoZgZrPUkO+4Kknnnkli/8hL3QQpQGJu1mp4SYgkfWyVGkZftfd4c2w2mApgxA/144oX6dWEpB82+bTkbOpeT30vFzBTb259QT7OpcxYUsaweietNIDkHVvF3FkR8i0uaZMVGBtp7NEn4KsV1HWxENgO2op/OSfP+jM8Jt85agiPbP/e4SZF+j7MFFe4I4AO60J0MST8wNRyG1w1W/9BY7W33Ic127PN/3TA5nitbFTd55PxETxLCMJxYjoXvU6auVXQToqOd/bvY0BbAzMQELSXMfzWW2NMLRgCW3vRDZyFesnBvrSQgTm8N8LHZ0ICxIGTa/NqNdl0MmBnS94WrLUs13ZmTxVq/FGWU6+H4lZEk/XE9uE7HBfo30966LMe8kMSPFGWfXn+Dg3tUOR4skXzLSskRiaxZOZlYn/bpGgTy2cNKYaqNzGdCnkpuP5NZ6PAAR/fHrFGhfphA6xGAsLLe5QYn9+zPoaJHyOAnYYnu7puytlbfS400bFHUOIzVKes90sH/j7PmyYd96sHj6FQbuQ49qAxB3dUUfWzHIU8uocy02UtEvIwEIT97XJF8qIqeqz5mRkUl82OzY8jpD+rVtNPClugyz4YLzcrE5hS91PWXAapaSnW+lPaVD6YSio+d71T9/LiCwdUY/MhqCtC7geu7bbYdgLhqfJOUaq+2cHXKMV0Np3foxyUiht07jJwxDVgiU2lOoRZ0Km6bwiGr7sRSFsHB0e3fxNlrwKkFZMdOd6scYAmSCzpfd5CAgErpmYaDJl6QbJm2bE7UVU75bpLTQg4E60sfcR8LdpraTpWb9KQCTptVJ9q6+OF1kNMzzlBWh5oxAS+zOyWruVf5SmAxAXgbBBju+gbcMRaoX7e3PExwglm/F84nld39761oC5r2IX84IOutNLle1mb69AAAAAA==');
