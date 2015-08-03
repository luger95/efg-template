<?php
if (is_array($GLOBALS['TL_DCA']['tl_form_field']['palettes']))
{
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupSelect'] = str_replace('{expert_legend:hide}', '{expert_legend:hide};{template_legend:hide},navigationTpl,customTpl', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupSelect']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupCheckbox'] = str_replace('{expert_legend:hide}', '{expert_legend:hide};{template_legend:hide},navigationTpl,customTpl', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupCheckbox']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgImageSelect'] = str_replace('{expert_legend:hide}', '{expert_legend:hide};{template_legend:hide},navigationTpl,customTpl', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgImageSelect']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupRadio'] = str_replace('{expert_legend:hide}', '{expert_legend:hide};{template_legend:hide},navigationTpl,customTpl', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupRadio']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgFormPaginator'] = str_replace('{expert_legend:hide}', '{expert_legend:hide};{template_legend:hide},navigationTpl,customTpl', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgFormPaginator']);
}