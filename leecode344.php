<?php
/*
 * @lc app=leetcode.cn id=872 lang=php
 *
 * [872] 叶子相似的树
 */

// @lc code=start
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
class Solution
{

    /**
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Boolean
     */
    public function leafSimilar($root1, $root2)
    {
        $leaves1 = [];
        $leaves2 = [];
        $this->getLeavesNode($root1, $leaves1);
        $this->getLeavesNode($root2, $leaves2);
        sort($leaves1);
        sort($leaves2);
        return $leaves1 == $leaves2;
    }

    public function getLeavesNode($root, &$leaf)
    {
        if ($root == null) {
            return;
        }
        if ($root->left == null || $root->right == null) {
            $leaf[] = $root->val;
        }
        $this->getLeavesNode($root->left, $leaf);
        $this->getLeavesNode($root->right, $leaf);
    }
}
// @lc code=end
