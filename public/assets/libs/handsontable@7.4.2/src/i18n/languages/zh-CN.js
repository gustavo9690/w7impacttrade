/**
 * @preserve
 * Authors: soakit
 * Last updated: Apr 28, 2018
 *
 * Description: Definition file for Chinese - China language-country.
 */
import * as C from '../constants';

const dictionary = {
  languageCode: 'zh-CN',
  [C.CONTEXTMENU_ITEMS_ROW_ABOVE]: '上方插入行',
  [C.CONTEXTMENU_ITEMS_ROW_BELOW]: '下方插入行',
  [C.CONTEXTMENU_ITEMS_INSERT_LEFT]: '左方插入列',
  [C.CONTEXTMENU_ITEMS_INSERT_RIGHT]: '右方插入列',
  [C.CONTEXTMENU_ITEMS_REMOVE_ROW]: ['移除该行', '移除多行'],
  [C.CONTEXTMENU_ITEMS_REMOVE_COLUMN]: ['移除该列', '移除多列'],
  [C.CONTEXTMENU_ITEMS_UNDO]: '撤销',
  [C.CONTEXTMENU_ITEMS_REDO]: '恢复',
  [C.CONTEXTMENU_ITEMS_READ_ONLY]: '只读',
  [C.CONTEXTMENU_ITEMS_CLEAR_COLUMN]: '清空该列',

  [C.CONTEXTMENU_ITEMS_ALIGNMENT]: '对齐',
  [C.CONTEXTMENU_ITEMS_ALIGNMENT_LEFT]: '左对齐',
  [C.CONTEXTMENU_ITEMS_ALIGNMENT_CENTER]: '水平居中',
  [C.CONTEXTMENU_ITEMS_ALIGNMENT_RIGHT]: '右对齐',
  [C.CONTEXTMENU_ITEMS_ALIGNMENT_JUSTIFY]: '两端对齐',
  [C.CONTEXTMENU_ITEMS_ALIGNMENT_TOP]: '顶端对齐',
  [C.CONTEXTMENU_ITEMS_ALIGNMENT_MIDDLE]: '垂直居中',
  [C.CONTEXTMENU_ITEMS_ALIGNMENT_BOTTOM]: '底端对齐',

  [C.CONTEXTMENU_ITEMS_FREEZE_COLUMN]: '冻结该列',
  [C.CONTEXTMENU_ITEMS_UNFREEZE_COLUMN]: '取消冻结',

  [C.CONTEXTMENU_ITEMS_BORDERS]: '边框',
  [C.CONTEXTMENU_ITEMS_BORDERS_TOP]: '上',
  [C.CONTEXTMENU_ITEMS_BORDERS_RIGHT]: '右',
  [C.CONTEXTMENU_ITEMS_BORDERS_BOTTOM]: '下',
  [C.CONTEXTMENU_ITEMS_BORDERS_LEFT]: '左',
  [C.CONTEXTMENU_ITEMS_REMOVE_BORDERS]: '移除边框',

  [C.CONTEXTMENU_ITEMS_ADD_COMMENT]: '插入批注',
  [C.CONTEXTMENU_ITEMS_EDIT_COMMENT]: '编辑批注',
  [C.CONTEXTMENU_ITEMS_REMOVE_COMMENT]: '删除批注',
  [C.CONTEXTMENU_ITEMS_READ_ONLY_COMMENT]: '只读批注',

  [C.CONTEXTMENU_ITEMS_MERGE_CELLS]: '合并',
  [C.CONTEXTMENU_ITEMS_UNMERGE_CELLS]: '取消合并',

  [C.CONTEXTMENU_ITEMS_COPY]: '复制',
  [C.CONTEXTMENU_ITEMS_CUT]: '剪切',

  [C.CONTEXTMENU_ITEMS_NESTED_ROWS_INSERT_CHILD]: '插入子行',
  [C.CONTEXTMENU_ITEMS_NESTED_ROWS_DETACH_CHILD]: '与母行分离',

  [C.CONTEXTMENU_ITEMS_HIDE_COLUMN]: ['隐藏该列', '隐藏多列'],
  [C.CONTEXTMENU_ITEMS_SHOW_COLUMN]: ['显示该列', '显示多列'],

  [C.CONTEXTMENU_ITEMS_HIDE_ROW]: ['隐藏该行', '隐藏多行'],
  [C.CONTEXTMENU_ITEMS_SHOW_ROW]: ['显示该行', '显示多行'],

  [C.FILTERS_CONDITIONS_NONE]: '无',
  [C.FILTERS_CONDITIONS_EMPTY]: '为空',
  [C.FILTERS_CONDITIONS_NOT_EMPTY]: '不为空',
  [C.FILTERS_CONDITIONS_EQUAL]: '等于',
  [C.FILTERS_CONDITIONS_NOT_EQUAL]: '不等于',
  [C.FILTERS_CONDITIONS_BEGINS_WITH]: '开头是',
  [C.FILTERS_CONDITIONS_ENDS_WITH]: '结尾是',
  [C.FILTERS_CONDITIONS_CONTAINS]: '包含',
  [C.FILTERS_CONDITIONS_NOT_CONTAIN]: '不包含',
  [C.FILTERS_CONDITIONS_GREATER_THAN]: '大于',
  [C.FILTERS_CONDITIONS_GREATER_THAN_OR_EQUAL]: '大于或等于',
  [C.FILTERS_CONDITIONS_LESS_THAN]: '小于',
  [C.FILTERS_CONDITIONS_LESS_THAN_OR_EQUAL]: '小于或等于',
  [C.FILTERS_CONDITIONS_BETWEEN]: '在此范围',
  [C.FILTERS_CONDITIONS_NOT_BETWEEN]: '不在此范围',
  [C.FILTERS_CONDITIONS_AFTER]: '之后',
  [C.FILTERS_CONDITIONS_BEFORE]: '之前',
  [C.FILTERS_CONDITIONS_TODAY]: '今天',
  [C.FILTERS_CONDITIONS_TOMORROW]: '明天',
  [C.FILTERS_CONDITIONS_YESTERDAY]: '昨天',

  [C.FILTERS_VALUES_BLANK_CELLS]: '空白单元格',

  [C.FILTERS_DIVS_FILTER_BY_CONDITION]: '按条件过滤',
  [C.FILTERS_DIVS_FILTER_BY_VALUE]: '按值过滤',

  [C.FILTERS_LABELS_CONJUNCTION]: '且',
  [C.FILTERS_LABELS_DISJUNCTION]: '或',

  [C.FILTERS_BUTTONS_SELECT_ALL]: '全选',
  [C.FILTERS_BUTTONS_CLEAR]: '清除',
  [C.FILTERS_BUTTONS_OK]: '确认',
  [C.FILTERS_BUTTONS_CANCEL]: '取消',

  [C.FILTERS_BUTTONS_PLACEHOLDER_SEARCH]: '搜索',
  [C.FILTERS_BUTTONS_PLACEHOLDER_VALUE]: '值',
  [C.FILTERS_BUTTONS_PLACEHOLDER_SECOND_VALUE]: '第二值'
};

export default dictionary;
