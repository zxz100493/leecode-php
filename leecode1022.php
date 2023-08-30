<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */

//   Definition for a binary tree node.
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;
    public function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public function sumRootToLeaf($root)
    {
        return $this->dfs($root, 0);
    }

    public function dfs($node, $val)
    {
        if ($node == null) {
            return 0;
        }
        // $val = ($val << 1) | $node->val;
        $val = $val * 2 + $node->val;
        if ($node->left == null && $node->right == null) {
            return $val;
        }
        return $this->dfs($node->left, $val) + $this->dfs($node->right, $val);
    }
}

// 示例用法
$leaf1 = new TreeNode(1);
$leaf2 = new TreeNode(0);
$leaf3 = new TreeNode(1);
$leaf4 = new TreeNode(0);
$leaf5 = new TreeNode(1);
$leaf6 = new TreeNode(0);
$leaf7 = new TreeNode(1);

$root = new TreeNode(1);
$root->left = $leaf1;
$root->right = $leaf2;
$leaf1->left = $leaf3;
$leaf1->right = $leaf4;
$leaf2->left = $leaf5;
$leaf2->right = $leaf6;
$leaf3->left = $leaf7;

$result = (new Solution)->sumRootToLeaf($root);
echo $result; // 输出结果
