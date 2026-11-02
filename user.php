<?php
class User
{
    public string $name;
    public int $age;
    public function __construct (string $name , int $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
    public function introduce(): string{
        return "こんにちは、私は" . $this -> name . "です。" . $this-> age . "歳です。<br>";
    }
    public function isAdult(): bool{
        return $this -> age >=18;
    }
}
$user1 = new User("田中太郎" , 25); 
$user2 = new User("佐藤花子" , 17);
$user3 = new User("鈴木一郎" , 30);

echo "<h2>ユーザー管理プログラム</h2>";
echo "<h3>自己紹介</h3>";
echo $user1->introduce();
echo $user2->introduce();
echo $user3->introduce();

echo "<h3>成人判定</h3>";
$users = [$user1 , $user2 , $user3];
foreach ($users as $user){
    if ($user->isAdult()){
        echo $user-> name . "さんは成人です。<br>";
    }else {
        echo $user-> name . "さんは未成年です。<br>";
    }
}
?>