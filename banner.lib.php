<?php
if(!defined('DEDEINC'))
{
    exit("Request Error!");
}
/**
 * 获取轮播图片列表
 *
 * @version        2016-5-14 22:59:06
 * @package        DedeCMS.Taglib
 * @copyright      Copyright (c) 2007 - 2010, sunny, Inc.
 */
 
/*>>dede>>
<name>频道标签</name>
<type>全局标记</type>
<for>V55,V56,V57</for>
<description>获取banner列表</description>
<demo>
{dede:banner  addfields='banner'  row='3' currentstyle=' <li>
                            <a href="~bannerlink~">
                                <img src="~bannerimg~" alt="~bannersiptitle~">
                            </a>
                              <div class="banner-titlebg">
                                <div class="banner-title">
                                    <a href="~bannerlink~">~bannertitle~</a>
                                </div>
                                <div class="ckxq"><a>查看详情</a></div>
                            </div>
                        </li>'}
 <li>
                            <a href="[field:bannerHref/]">
                                <img src="[field:bannerUrl/]" alt="[filed:bannerAlt/]">
                            </a>
                              <div class="banner-titlebg">
                                <div class="banner-title">
                                    <a href="[field:bannerHref/]">新闻标题新闻标题新闻标题新闻标题新标题新闻标新闻标新闻标新闻标新闻标新闻标</a>
                                </div>
                                <div class="ckxq"><a>查看详情</a></div>
                            </div>
                        </li>
{/dede:banner}
</demo>
<attributes>
     <iterm>row:调用数量</iterm>
</attributes> 
>>dede>>*/
function lib_banner(&$ctag,&$refObj)
{
    global $dsql,$envs;
    
    //属性处理
    $attlist="row|3";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
    extract($ctag->CAttribute->Items, EXTR_SKIP);
$row = empty($row) ? 3 : $row;

    
    //你需编写的代码，不能用echo之类语法，把最终返回值传给$revalue
     $sql = "select * from dede_banner order by aid limit $row ";

 $dsql->SetQuery($sql);
      $dsql->Execute();
		 while($dbrow=$dsql->GetObject())
    {
       
           $revalue.= "<li><a href='".$dbrow->tourl."'><img src='".$dbrow->imgurl."' alt='".$dbrow->imgname ."' text='".$dbrow->imgname ."' /></a></li> ";
        }
       
    return $revalue;
}
?>