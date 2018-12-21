<html>
<body>
    <?php
    class User
    {
        public $name;
        public $password;
        public $email;
        public $city;

        function __construct($name, $password, $email, $city)
        {
            $this->name = $name;
            $this->password = $password;
            $this->email = $email;
            $this->city = $city;
        }

        function getInfo()
        {
            $information =  "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";
            return $information;
        }
    }

    class Moderator extends User {
        public $info;
        public $rights;

        function __construct($name, $password, $email, $city, $info, $rights)
        {
            parent::__construct($name, $password, $email, $city);
            $this->info = $info;
            $this->rights = $rights;
        }

        function getInfo()
        {
            $information = parent::getInfo();
            $information .=  "{$this->info}" . "{$this->rights}";
            return $information;
        }

    }



    //$user1 = new User("Alex", "111111", "alex@gmeil.com", "Kiev");
    //echo $user1->getInfo();
    $moderator = new Moderator("Max", "222222", "max@gmeil.com", "Odessa", "Moderator", "true");
    echo "<br><br>";
    echo $moderator->getInfo();
    echo "<br><br>";

    function test($arg) {
        $res = 0;
        for($i=0;$i<$arg;$i++) {
            $res = $res + $i;
            echo $res . "<br>";
        }
        return $res;
    }

    echo "<br><br>";

    $a = "1";
    $b = true;

    if($a==$b) {
        echo "TRUE";
    }  else {
        echo "FALSE";
    }

    ?>
</body>
</html>
