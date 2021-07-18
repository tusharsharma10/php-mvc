<?php
/* Smarty version 3.1.39, created on 2021-07-18 02:20:19
  from '/home/tushar/lampstack-8.0.8-0/apache2/htdocs/learn/view/student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f3428b8ca489_51910023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4849ec2b18caf86a377fcfc3062343e08538df1' => 
    array (
      0 => '/home/tushar/lampstack-8.0.8-0/apache2/htdocs/learn/view/student.tpl',
      1 => 1626555018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f3428b8ca489_51910023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209643704760f3428b8c8079_28118521', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './main.tpl');
}
/* {block 'body'} */
class Block_209643704760f3428b8c8079_28118521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_209643704760f3428b8c8079_28118521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>List of Students</h1>
    <table>
        <tr>
            <th>Student Id</th>
            <th>Student Name</th>
        </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['s']->value['studentId'];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['s']->value['STUDENT_NAME'];?>

            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php
}
}
/* {/block 'body'} */
}
