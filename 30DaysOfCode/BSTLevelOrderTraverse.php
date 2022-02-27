<?php
class Node{
    public $left,$right;
    public $data;
    function __construct($data)
    {
        $this->left=$this->right=null;
        $this->data = $data;
    }
}
class Solution{
    public function insert($root,$data){
        if($root==null){
            return new Node($data);
        }
        else{            
            if($data<=$root->data){
                $cur=$this->insert($root->left,$data);
                $root->left=$cur;
            }
            else{
                $cur=$this->insert($root->right,$data);
                $root->right=$cur;
            }
            return $root;
        }
    }

	public function levelOrder($root){
      //initialize arr variable with root element inside
      $arr = [$root];
      
      //loop when arr is not null
      while(!empty($arr))
      {
          //remove / dequeue element and save dequeued element to node
          $node = array_shift($arr);
          
          //check node left is not empty, then push it to arr
          if(!empty($node->left))
          {
              array_push($arr,$node->left);
          }
          
          //check node right is not empty, then push it to arr
          if(!empty($node->right))
          {
              array_push($arr,$node->right);
          }
          
          echo $node->data." ";
      }
    }

}//End of Solution
$myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while($T-->0){
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root,$data);
}
$myTree->levelOrder($root);
?>
    