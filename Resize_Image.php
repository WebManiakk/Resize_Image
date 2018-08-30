<?
foreach($arResult['ITEMS'] as $key => &$arItem){
    $picID = 0;

    //ДІСТАЄМ ФОТО ТОВАРУ
    if($arItem['DETAIL_PICTURE'] > 0){
        $picID = $arItem['DETAIL_PICTURE'];
    }elseif($arItem['PREVIEW_PICTURE']){
      $picID = $arItem['PREVIEW_PICTURE'];
  }

    if($picID > 0){
      $fileNews = CFile::ResizeImageGet($picID, array('width'=>220, 'height'=>168), BX_RESIZE_IMAGE_EXACT);
      $arItem['CUT_PICTURE'] = $fileNews['src'];
  }else{
      $arItem['CUT_PICTURE'] = SITE_TEMPLATE_PATH."/build/img/no-img.png";
  }
}
unset($arItem);
